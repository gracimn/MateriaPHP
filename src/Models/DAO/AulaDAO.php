<?php

namespace Php\Primeiroprojeto\Models\DAO;
use Php\Primeiroprojeto\Models\Domain\Aula;

class AulaDAO {

    private Conexao $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function inserir(Aula $aula) {
        try {
            $sql = "INSERT INTO aula (nome, inicio, fim) VALUES (:nome, :inicio, :fim)";
            // agora a variável PDO tá dentro do objeto conexão
            $p = $this->conexao->getConexao()->prepare($sql); // $p de prepare conexao
            $p->bindValue(":nome", $aula->getNome());
            $p->bindValue(":inicio", $aula->getInicio());
            $p->bindValue(":fim", $aula->getFim());
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function alterar(Aula $aula) {
        try {
            $sql = "UPDATE aula
                    SET nome = :nome,
                    inicio = :inicio,
                    fim = :fim
                    WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":nome", $aula->getNome());
            $p->bindValue(":inicio", $aula->getInicio());
            $p->bindValue(":fim", $aula->getFim());
            $p->bindValue(":id", $aula->getId());
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function excluir($id) {
        try {
            $sql = "DELETE FROM aula
                    WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function consultarTodos() {
        try {
            $sql = "SELECT * FROM aula";
            return $this->conexao->getConexao()->query($sql); // para retornar vários resultados
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function consultar($id) {
        try {
            $sql = "SELECT * FROM aula WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return 0;
        }
    }

}