<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Professor;

class ProfessorDAO{

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(Professor $professor){
        try{
            $sql = "INSERT INTO professor (Nome, Idade, Materia) VALUES (:Nome, :Idade, :Materia)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":Nome", $professor->getNome());
            $p->bindValue(":Idade", $professor->getIdade());
            $p->bindValue(":Materia", $professor->getMateria());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

}