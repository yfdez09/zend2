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
use Registro\Model\RegistroModel;

class IndexController extends AbstractActionController
{
       
    private $RegistroModel;
    
    public function __construct()
    {
     $this->RegistroModel = new RegistroModel();    
    }
        
    public function indexAction()
    {   
        $textoretorno = $this->RegistroModel->indexAction();
        return new ViewModel(array('texto' => $textoretorno));
    }
    
    public function createAction()
    {
        return new ViewModel();
    }
    
    public function updateAction($id)
    {
        return new ViewModel();
    }
    
    public function deleteAction($id)
    {
        return new ViewModel();
    }
    
}
