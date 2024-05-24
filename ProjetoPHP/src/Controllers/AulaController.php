<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\Models\DAO\AulaDAO;
use Php\Primeiroprojeto\Models\Domain\Aula;

class AulaController{

    public function inserir($params){
        require_once("../src/Views/Aula/inserir_aula.html");
    }

    public function novo($params){
        $aula = new Aula(0, $_POST['nome'], $_POST['inicio'], $_POST['fim']);
        $aulaDAO = new AulaDAO();
        if ($aulaDAO->inserir($aula)){
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir!";
        }
    }

}
