<?php

namespace Php\Primeiroprojeto\Models\Domain;

class Curso{

    private $id;
    private $nome;
    private $descricao;
    private $tempo;

    public function __construct($id, $nome, $descricao, $tempo){
        $this->setId($id);
        $this->setNome($nome);
        $this->setDescricao($descricao);
        $this->setTempo($tempo);
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getTempo(){
        return $this->tempo;
    }
    public function setTempo($tempo){
        $this->tempo = $tempo;
    }


}