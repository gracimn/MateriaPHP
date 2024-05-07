<?php

namespace Php\Primeiroprojeto\Controllers;

use Php\Primeiroprojeto\Models\DAO\AlunoDAO;
use Php\Primeiroprojeto\Models\Domain\Aluno;

class AlunoController{

    public function inserir($params){
        require_once("../src/Views/Aluno/inserir_aluno.html");
    }

    public function novo($params){
        $aluno = new Aluno(0, $_POST['nome'], $_POST['idade'], $_POST['pais']);
        $alunoDAO = new AlunoDAO();
        if ($alunoDAO->inserir($aluno)){
            return "Inserido com sucesso!";
        } else {
            return "Erro ao inserir!";
        }
    }

}