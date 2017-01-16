<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Registro\Model;

/**
 * Description of ClienteTable
 *
 * @author Lifecon
 */
class ClienteTable {
    
    
    private $tableGateway;

public function __construct($tableGateway){

	$this->tableGateway = $tableGateway;
}

public function finAll(){

        $resultSet = $this->tableGateway->seelct();
        return $resultSet;
}
    
    
}
