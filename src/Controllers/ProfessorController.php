<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\Models\DAO\ProfessorDAO;
use Php\Primeiroprojeto\Models\Domain\Professor;

class ProfessorController {

    public function index($params) {
        $professorDAO = new ProfessorDAO;
        $resultado = $professorDAO->consultarTodos();
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
            $mensagem = "Erro ao excluído!";
        }
        else {
            $mensagem = "";
        }

        require_once("../src/Views/professor/professor.php");
    }

    public function inserir($params) {
        require_once("../src/Views/professor/inserir_professor.html");
    }

    public function novo($params) {
        $professor = new Professor(0, $_POST["nome"], $_POST["idade"], $_POST["materia"], $_POST["email"]);
        $professorDAO = new ProfessorDAO();
        if ($professorDAO->inserir($professor)) {
            header("location: /professor/inserir/true");
        }
        else {
            header("location: /professor/inserir/false");
        }
    }

    public function alterar($params) {
        $professorDAO = new ProfessorDAO();
        $resultado = $professorDAO->consultar($params[1]);
        require_once("../src/Views/professor/alterar_professor.php");
    }

    public function excluir($params) {
        $professorDAO = new ProfessorDAO();
        $resultado = $professorDAO->consultar($params[1]);
        require_once("../src/Views/professor/excluir_professor.php");
    }

    public function editar($params) {
        $professor = new Professor($_POST['id'], $_POST["nome"], $_POST['idade'], $_POST['materia'], $_POST['email']);
        $professorDAO = new ProfessorDAO();
        if ($professorDAO->alterar($professor)) {
            header("location: /professor/alterar/true");
        }
        else {
            header("location: /professor/alterar/false");
        }
    }

    public function deletar($params) {
        $professorDAO = new ProfessorDAO();
        if ($professorDAO->excluir($_POST['id'])) {
            header("Location: /professor/excluir/true");
        }
        else {
            header("Location: /professor/excluir/false");
        }
    }

}



?>