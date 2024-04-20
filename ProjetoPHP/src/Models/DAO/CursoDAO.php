<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Curso;

class CursoDAO{

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(Curso $curso){
        try{
            $sql = "INSERT INTO curso (Nome, Descricao, Tempo) VALUES (:Nome, :Descricao, :Tempo)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":Nome", $curso->getNome());
            $p->bindValue(":Descricao", $curso->getDescricao());
            $p->bindValue(":Tempo", $curso->getTempo());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

}