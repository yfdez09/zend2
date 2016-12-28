<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Registro;


return array(
     'controllers' => array(
         'invokables' => array(
             'Registro\Controller\Index' => 'Registro\Controller\IndexController',
             //'Registro\Controller\Index' => Controller\IndexController::class
         ),
     ),

     // The following section is new and should be added to your file
     'router' => array(
         'routes' => array(
             'registro' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/registro[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'Registro\Controller\Index',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),

     'view_manager' => array(
         'template_path_stack' => array(
             'registro' => __DIR__ . '/../view',
         ),
     ),
 );




/*
return array(
    'router' => array(
        'routes' => array(
            'registro' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/registro',
                    'defaults' => array(
                        'controller' => 'Registro\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
         
            'registro_novo' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/novo',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Registro\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),                
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
        ),
    ),
    
    'controllers' => array(
        'invokables' => array(
            'Registro\Controller\Index' => Controller\IndexController::class
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'registro/index/index' => __DIR__ . '/../view/registro/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
*/