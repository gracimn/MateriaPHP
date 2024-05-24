<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Aula;

class AulaDAO {

    private Conexao $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function consultarTodos() {
        try {
            $sql = "SELECT * FROM aula";
            $stmt = $this->conexao->getConexao()->query($sql);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            return [];
        }
    }

    public function consultar($id) {
        try {
            $sql = "SELECT * FROM aula WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            return null;
        }
    }

    public function inserir(Aula $aula) {
        try {
            $sql = "INSERT INTO aula (nome, inicio, fim) VALUES (:nome, :inicio, :fim)";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":nome", $aula->getNome());
            $stmt->bindValue(":inicio", $aula->getInicio());
            $stmt->bindValue(":fim", $aula->getFim());
            return $stmt->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function alterar(Aula $aula) {
        try {
            $sql = "UPDATE aula SET nome = :nome, inicio = :inicio, fim = :fim WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":nome", $aula->getNome());
            $stmt->bindValue(":inicio", $aula->getInicio());
            $stmt->bindValue(":fim", $aula->getFim());
            $stmt->bindValue(":id", $aula->getId(), \PDO::PARAM_INT);
            return $stmt->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function excluir($id) {
        try {
            $sql = "DELETE FROM aula WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
            return $stmt->execute();
        } catch (\Exception $e) {
            return false;
        }
    }
}

?>
