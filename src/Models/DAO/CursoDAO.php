<?php

namespace Php\Primeiroprojeto\Models\DAO;
use Php\Primeiroprojeto\Models\Domain\Curso;

class CursoDAO {

    private Conexao $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function inserir(Curso $curso) {
        try {
            $sql = "INSERT INTO curso (nome, descricao, tempo) VALUES (:nome, :descricao, :tempo)";
            // agora a variável PDO tá dentro do objeto conexão
            $p = $this->conexao->getConexao()->prepare($sql); // $p de prepare conexao
            $p->bindValue(":nome", $curso->getNome());
            $p->bindValue(":descricao", $curso->getDescricao());
            $p->bindValue(":tempo", $curso->getTempo());
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function alterar(Curso $curso) {
        try {
            $sql = "UPDATE curso
                    SET nome = :nome,
                    descricao = :descricao,
                    tempo = :tempo
                    WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":nome", $curso->getNome());
            $p->bindValue(":descricao", $curso->getDescricao());
            $p->bindValue(":tempo", $curso->getTempo());

            $p->bindValue(":id", $curso->getId());
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function excluir($id) {
        try {
            $sql = "DELETE FROM curso
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
            $sql = "SELECT * FROM curso";
            return $this->conexao->getConexao()->query($sql); // para retornar vários resultados
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function consultar($id) {
        try {
            $sql = "SELECT * FROM curso WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return 0;
        }
    }

}
