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
use Registro\Model\Registro;
use Registro\Model\RegistroTable;
use Registro\Form\RegistroForm;


class IndexController extends AbstractActionController
{       
    protected $registroTable;
    
    public function __construct()
    {
     
    }
        
    public function indexAction()
    {         
        return new ViewModel(array('registros' => $this->getRegistroTable()->fetchAll(),));
    }
    
    public function addAction()
    {
       return new ViewModel(); 
    }
    
    public function editAction()
    {
        return new ViewModel();
    }
    
    public function deleteAction()
    {
        return new ViewModel();
    }
    
    public function getRegistroTable(){
        if (!$this->registroTable){
            $sm = $this->getServiceLocator();
            $this->registroTable = $sm->get('Registro\Model\RegistroTable');
        }
        return $this->registroTable;
        
    }
}
