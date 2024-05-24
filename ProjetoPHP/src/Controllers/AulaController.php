<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\Models\DAO\AulaDAO;
use Php\Primeiroprojeto\Models\Domain\Aula;

class AulaController {

    public function index($params) {
        $aulaDAO = new AulaDAO();
        $resultado = $aulaDAO->consultarTodos();
        $acao = $params[1] ?? "";
        $status = $params[2] ?? "";

        if ($acao == "inserir" && $status == "true") {
            $mensagem = "Registro inserido com sucesso!";
        }
        else if ($acao == "inserir" && $status == "false") {
            $mensagem = "Erro ao inserir!";
        }
        else if ($acao == "alterar" && $status == "true") {
            $mensagem = "Registro alterado com sucesso!";
        }
        else if ($acao == "alterar" && $status == "false") {
            $mensagem = "Erro ao alterar!";
        }
        else if ($acao == "excluir" && $status == "true") {
            $mensagem = "Registro excluído com sucesso!";
        }
        else if ($acao == "excluir" && $status == "false") {
            $mensagem = "Erro ao excluir!";
        }
        else {
            $mensagem = "";
        }

        require_once("../src/Views/aula/aula.php");
    }

    public function inserir($params) {
        require_once("../src/Views/aula/inserir_aula.html");
    }

    public function novo($params) {
        $aula = new Aula(0, $_POST['nome'], $_POST['inicio'], $_POST['fim']);
        $aulaDAO = new AulaDAO();
        if ($aulaDAO->inserir($aula)) {
            header("location: /aula/inserir/true");
        }
        else {
            header("location: /aula/inserir/false");
        }
    }

    public function alterar($params) {
        $aulaDAO = new AulaDAO();
        $resultado = $aulaDAO->consultar($params[1]);
        require_once("../src/Views/aula/alterar_aula.php");
    }

    public function editar($params) {
        $aula = new Aula($_POST['id'], $_POST['nome'], $_POST['inicio'], $_POST['fim']);
        $aulaDAO = new AulaDAO();
        if ($aulaDAO->alterar($aula)) {
            header("location: /aula/alterar/true");
        }
        else {
            header("location: /aula/alterar/false");
        }
    }

    public function excluir($params) {
        $aulaDAO = new AulaDAO();
        $resultado = $aulaDAO->consultar($params[1]);
        require_once("../src/Views/aula/excluir_aula.php");
    }

    public function deletar($params) {
        $aulaDAO = new AulaDAO();
        if ($aulaDAO->excluir($_POST['id'])) {
            header("Location: /aula/excluir/true");
        }
        else {
            header("Location: /aula/excluir/false");
        }
    }
}

?>
