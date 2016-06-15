<?php
/**
 * ZF3 book Zend Framework Center Example Application
 *
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/zendframework-center
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace Application;

use Application\Controller\IndexController;
use Application\Controller\TestController;
use Application\Controller\IndexControllerFactory;
use Zend\Navigation\Page\Mvc;
use Zend\Router\Http\Literal;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'test' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/test',
                    'defaults' => [
                        'controller' => TestController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'controllers' => [
        'factories' => [
            IndexController::class => IndexControllerFactory::class,
            TestController::class => InvokableFactory::class,
        ],
    ],

    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map'             =>
            include APPLICATION_MODULE_ROOT . '/template_map.php',
        'template_path_stack'      => [
            APPLICATION_MODULE_ROOT . '/view',
        ],
    ],

    'navigation' => [
        'default' => [
            'application' => [
                'type'          => Mvc::class,
                'order'         => '100',
                'label'         => 'Startseite',
                'route'         => 'home',
                'controller'    => IndexController::class,
                'action'        => 'index',
                'useRouteMatch' => true,
            ],
            'test' => [
                'type'          => 'mvc',
                'order'         => '999',
                'label'         => 'Testseite',
                'route'         => 'test',
                'controller'    => TestController::class,
                'action'        => 'index',
                'useRouteMatch' => true,
            ],
        ],
    ],
];
