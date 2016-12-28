<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Registro\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
//use Registro\Model\RegistroModel;
use Registro\Form\RegistroForm;

class IndexController extends AbstractActionController
{       
    //private $RegistroModel;
    
    public function __construct()
    {
     //$this->RegistroModel = new RegistroModel();    
    }
        
    public function indexAction()
    {   
        //$textoretorno = $this->RegistroModel->indexAction();
        $textoretorno = "hola index";
        return new ViewModel(array('texto' => $textoretorno));
    }
    
    public function createAction()
    {
        $formcreate = new RegistroForm('form');        
        return new ViewModel(array('form' => $formcreate));
    }
    
    public function updateAction()
    {
        return new ViewModel();
    }
    
    public function deleteAction()
    {
        return new ViewModel();
    }
    
}
