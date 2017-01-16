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
class Cliente {
   
    private $id;
    private $nome;
    private $cep;
    private $numero;
    private $endereco;
    private $complemento;
    private $cidade;
    private $bairro;
    private $telefone;
    private $email;
    
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
    
    public function setCep($cep){
          $this->cep = $cep;
    }    
    
    public function getCep(){
        return $this->cep;
    }
    
    public function setNumero($numero){
          $this->numero = $numero;
    }    
    
    public function getNumero(){
        return $this->numero;
    }
    
    public function setEndereco($endereco){
          $this->endereco = $endereco;
    }    
    
    public function getEndereco(){
        return $this->endereco;
    }
    
    public function setComplemente($complemento){
          $this->complemento = $complemento;
    }    
    
    public function getComplemento(){
        return $this->complemento;
    }
    
    public function setCidade($Cidade){
          $this->cidade = $Cidade;
    }    
    
    public function getCidade(){
        return $this->cidade;
    }
    
    public function setBairro($bairro){
          $this->bairro = $bairro;
    }    
    
    public function getBairro(){
        return $this->bairro;
    }
    
    public function setEstado($estado){
          $this->id = $estado;
    }    
    
    public function getEstado(){
        return $this->estado;
    }
    
    public function setTelefone($telefone){
          $this->telefone = $telefone;
    }    
    
    public function getTelefone(){
        return $this->telefone;
    }
    
    public function exchangeArray(array $data){
	$this->setId($data['id'])
	     ->setNome($data['nome'])
             ->setCep($data['cep'])
             ->setNumero($data['numero'])
             ->setEndereco($data['endereco'])
             ->setComplemento($data['complemento'])
             ->setCidade($data['cidade'])
             ->setBairro($data['bairro'])  
             ->setEstado($data['estado'])
             ->setTelefone($data['telefone']);     
    } 
    
}
