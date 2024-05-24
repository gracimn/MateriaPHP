<?php

namespace Php\Primeiroprojeto\Models\Domain;

class Professor{

    private $id;
    private $nome;
    private $idade;
    private $materia;

    public function __construct($id, $nome, $idade, $materia){
        $this->setId($id);
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setMateria($materia);
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

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getMateria(){
        return $this->materia;
    }
    public function setMateria($materia){
        $this->materia = $materia;
    }

}
