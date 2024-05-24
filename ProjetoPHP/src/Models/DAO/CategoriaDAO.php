<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Categoria;

class CategoriaDAO {

    private Conexao $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function consultarTodos() {
        try {
            $sql = "SELECT * FROM categoria";
            $stmt = $this->conexao->getConexao()->query($sql);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            return [];
        }
    }

    public function consultar($id) {
        try {
            $sql = "SELECT * FROM categoria WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            return null;
        }
    }

    public function inserir(Categoria $categoria) {
        try {
            $sql = "INSERT INTO categoria (descricao) VALUES (:descricao)";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":descricao", $categoria->getDescricao());
            return $stmt->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function alterar(Categoria $categoria) {
        try {
            $sql = "UPDATE categoria SET descricao = :descricao WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":descricao", $categoria->getDescricao());
            $stmt->bindValue(":id", $categoria->getId(), \PDO::PARAM_INT);
            return $stmt->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function excluir($id) {
        try {
            $sql = "DELETE FROM categoria WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
            return $stmt->execute();
        } catch (\Exception $e) {
            return false;
        }
    }
}

?>
