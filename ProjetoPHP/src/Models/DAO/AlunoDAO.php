<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Aluno;

class AlunoDAO {

    private Conexao $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function consultarTodos() {
        try {
            $sql = "SELECT * FROM aluno";
            $stmt = $this->conexao->getConexao()->query($sql);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch(\Exception $e) {
            return [];
        }
    }

    public function consultar($id) {
        try {
            $sql = "SELECT * FROM aluno WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } catch(\Exception $e) {
            return null;
        }
    }

    public function inserir(Aluno $aluno) {
        try {
            $sql = "INSERT INTO aluno (Nome, Idade, Pais) VALUES (:Nome, :Idade, :Pais)";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":Nome", $aluno->getNome());
            $stmt->bindValue(":Idade", $aluno->getIdade());
            $stmt->bindValue(":Pais", $aluno->getPais());
            return $stmt->execute();
        } catch(\Exception $e) {
            return false;
        }
    }

    public function alterar(Aluno $aluno) {
        try {
            $sql = "UPDATE aluno SET Nome = :Nome, Idade = :Idade, Pais = :Pais WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":Nome", $aluno->getNome());
            $stmt->bindValue(":Idade", $aluno->getIdade());
            $stmt->bindValue(":Pais", $aluno->getPais());
            $stmt->bindValue(":id", $aluno->getId(), \PDO::PARAM_INT);
            return $stmt->execute();
        } catch(\Exception $e) {
            return false;
        }
    }

    public function excluir($id) {
        try {
            $sql = "DELETE FROM aluno WHERE id = :id";
            $stmt = $this->conexao->getConexao()->prepare($sql);
            $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
            return $stmt->execute();
        } catch(\Exception $e) {
            return false;
        }
    }
}

?>
