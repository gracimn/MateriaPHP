<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Professor;

class ProfessorDAO {

    private Conexao $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function consultarTodos() {
        try {
            $sql = "SELECT * FROM professor";
            $stmt = $this->conexao->getConexao()->query($sql);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            return [];
        }
    }

    public function consultar($id) {
        try {
            $sql = "SELECT * FROM professor WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            return null;
        }
    }

    public function inserir(Professor $professor) {
        try {
            $sql = "INSERT INTO professor (nome, idade, materia) VALUES (:nome, :idade, :materia)";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":nome", $professor->getNome());
            $stmt->bindValue(":idade", $professor->getIdade());
            $stmt->bindValue(":materia", $professor->getMateria());
            return $stmt->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function alterar(Professor $professor) {
        try {
            $sql = "UPDATE professor SET nome = :nome, idade = :idade, materia = :materia WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":nome", $professor->getNome());
            $stmt->bindValue(":idade", $professor->getIdade());
            $stmt->bindValue(":materia", $professor->getMateria());
            $stmt->bindValue(":id", $professor->getId(), \PDO::PARAM_INT);
            return $stmt->execute();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function excluir($id) {
        try {
            $sql = "DELETE FROM professor WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
            return $stmt->execute();
        } catch (\Exception $e) {
            return false;
        }
    }
}

?>
