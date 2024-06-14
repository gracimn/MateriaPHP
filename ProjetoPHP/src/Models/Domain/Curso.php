<?php

namespace Php\Primeiroprojeto\Models\Domain;

class Curso {

    private $id;
    private $nome;
    private $descricao;
    private $tempo;
    private $categoria;

    public function __construct($id, $nome, $descricao, $tempo, $categoria)
    {
        $this->setId($id);
        $this->setNome($nome);
        $this->setDescricao($descricao);
        $this->setTempo($tempo);
        $this->setCategoria($categoria);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getTempo() {
        return $this->tempo;
    }

    public function SetTempo($tempo) {
        $this->tempo = $tempo;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function SetCategoria($categoria) {
        $this->categoria = $categoria;
    }

}