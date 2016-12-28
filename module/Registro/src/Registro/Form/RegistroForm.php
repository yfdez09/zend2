<?php

namespace Registro\Form;

use Zend\Captcha\AdapterInterface as CatchaAdapter;
use Zend\Captcha;
use Zend\Form\Element;
use Zend\Form\Form;
use Zend\Form\Factory;

/**
 * Description of registroForm
 *
 * @author Lifecon
 */
class RegistroForm extends Form {
    
    public function __construct($nombre = null) {
        parent::__construct('nome');        
        
    }   
    
}
 