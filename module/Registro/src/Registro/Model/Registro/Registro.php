<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Registro\Model;

/**
 * Description of cliente
 *
 * @author Lifecon
 */
class Registro {
   
    private $id;
    private $nome;
    private $sobrenome;
    private $edad;
    private $sexo;
    
    
    public function setId($id){
          $this->id = $id;
    }    
    
    public function getId(){
        return $this->id;
    }
    
    public function setNome($nome){
          $this->nome = $nome;
    }    
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getSobrenome(){
        return $this->sobrenome;
    }
    
    public function setSobrenome($sobrenome){
          $this->nome = $sobrenome;
    }    
    
     
    public function setEdad($edad){
          $this->edad = $edad;
    }    
    
    public function getEdad(){
        return $this->edad;
    }
    
    public function setSexo($sexo){
          $this->edad = $sexo;
    }    
    
    public function getSexo(){
        return $this->sexo;
    }
     
    
    
    public function exchangeArray(array $data){
	$this->setId($data['id'])
	     ->setNome($data['nome'])
             ->setSobrenome($data['sobrenome'])
             ->setEdad($data['edad'])
             ->setSexo($data['sexo']);
    } 
    
}
