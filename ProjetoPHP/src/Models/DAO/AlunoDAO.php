<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Aluno;

class AlunoDAO{

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(Aluno $aluno){
        try{
            $sql = "INSERT INTO aluno (Nome, Idade, Pais) VALUES (:Nome, :Idade, :Pais)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":Nome", $aluno->getNome());
            $p->bindValue(":Idade", $aluno->getIdade());
            $p->bindValue(":Pais", $aluno->getPais());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

}