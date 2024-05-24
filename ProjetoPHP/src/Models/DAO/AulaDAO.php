<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Aula;

class AulaDAO{

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(Aula $aula){
        try{
            $sql = "INSERT INTO aula (Nome, Inicio, Fim) VALUES (:Nome, :Inicio, :Fim)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":Nome", $aula->getNome());
            $p->bindValue(":Inicio", $aula->getInicio());
            $p->bindValue(":Fim", $aula->getFim());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

}