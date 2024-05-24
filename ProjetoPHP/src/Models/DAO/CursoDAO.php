<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Curso;

class CursoDAO {

    private Conexao $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function consultarTodos() {
        try {
            $sql = "SELECT * FROM curso";
            $stmt = $this->conexao->getConexao()->query($sql);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            return [];
        }
    }

    public function consultar($id) {
        try {
            $sql = "SELECT * FROM curso WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            return null;
        }
    }

    public function inserir(Curso $curso) {
        try {
            $sql = "INSERT INTO curso (nome, descricao, tempo) VALUES (:nome, :descricao, :tempo)";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":nome", $curso->getNome());
            $stmt->bindValue(":descricao", $curso->getDescricao());
            $stmt->bindValue(":tempo", $curso->getTempo());
            return $stmt->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function alterar(Curso $curso) {
        try {
            $sql = "UPDATE curso SET nome = :nome, descricao = :descricao, tempo = :tempo WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":nome", $curso->getNome());
            $stmt->bindValue(":descricao", $curso->getDescricao());
            $stmt->bindValue(":tempo", $curso->getTempo());
            $stmt->bindValue(":id", $curso->getId(), \PDO::PARAM_INT);
            return $stmt->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function excluir($id) {
        try {
            $sql = "DELETE FROM curso WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
            return $stmt->execute();
        } catch (\Exception $e) {
            return false;
        }
    }
}

?>
