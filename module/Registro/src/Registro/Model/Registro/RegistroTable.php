<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Registro\Model;

use Zend\Db\TableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;

/**
 * Description of ClienteTable
 *
 * @author Lifecon
 */
class RegistroTable {
    
    
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway){

            $this->tableGateway = $tableGateway;
    }
    
    
    //Select All
    public function fetchAll(){

            $resultSet = $this->tableGateway->select();
            return $resultSet;
    }

    //Select
    public function getRegistro($id) {
        
        $id = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        return $row;
    }
    
    //Save or Update
    public function saveRegistro(Registro $registro) {
        $data = array(
            'nome' => $registro->nome,
            'sobrenome' => $registro->sobrenome,
            'edad' => $registro->edad,
            'sexo' => $registro->sexo            
            );
        $id = $registro->id;
        if (!$this->getRegistro($id)){
            $data['id'] = $id;
            $this->tableGateway->insert($data);
        }
        else {
            $this->tableGateway->update($data, array('id' => $id));        
        }
    }
    
    //Delete    
    public function deleteRegistro($id) {
        $this->tableGateway->delete(array('id' => $id));  
    }
    
}
