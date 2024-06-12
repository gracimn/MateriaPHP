<?php

namespace Php\Primeiroprojeto\Models\DAO;
use Php\Primeiroprojeto\Models\Domain\Professor;

class ProfessorDAO {

    private Conexao $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function inserir(Professor $professor) {
        try {
            $sql = "INSERT INTO professor (nome, idade, materia, email) VALUES (:nome, :idade, :materia, :email)";
            // agora a variável PDO tá dentro do objeto conexão
            $p = $this->conexao->getConexao()->prepare($sql); // $p de prepare conexao
            $p->bindValue(":nome", $professor->getNome());
            $p->bindValue(":idade", $professor->getIdade());
            $p->bindValue(":materia", $professor->getmateria());
            $p->bindValue(":email", $professor->getEmail());
            return $p->execute();
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function alterar(Professor $professor) {
        try {
            $sql = "UPDATE professor
                    SET razao_social = :razao_social,
                    idade = :idade,
                    materia = :materia,
                    email = :email
                    WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":razao_social", $professor->getNome());
            $p->bindValue(":idade", $professor->getIdade());
            $p->bindValue(":materia", $professor->getMateria());
            $p->bindValue(":email", $professor->getEmail());
            $p->bindValue(":id", $professor->getId());
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function excluir($id) {
        try {
            $sql = "DELETE FROM professor
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
            $sql = "SELECT * FROM professor";
            return $this->conexao->getConexao()->query($sql); // para retornar vários resultados
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function consultar($id) {
        try {
            $sql = "SELECT * FROM professor WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return 0;
        }
    }

}