<?php
/**
 * ZF3 book Zend Framework Center Example Application
 *
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/zf3buch/zendframework-center
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

use AdvertFrontend\Controller\DisplayController;
use AdvertFrontend\Controller\ModifyController;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            'job' => [
                'type'          => Literal::class,
                'options'       => [
                    'route'    => '/job',
                    'defaults' => [
                        'controller' => DisplayController::class,
                        'action'     => 'index',
                        'type'       => 'job',
                    ],
                ],
                'may_terminate' => true,
                'child_routes'  => [
                    'modify'   => [
                        'type'    => Segment::class,
                        'options' => [
                            'route'       => '/:action[/:id]',
                            'defaults'    => [
                                'controller' => ModifyController::class,
                            ],
                            'constraints' => [
                                'action' => '(add|edit|delete)',
                                'id'     => '[1-9][0-9]*',
                            ],
                        ],
                    ],
                    'detail' => [
                        'type'    => Segment::class,
                        'options' => [
                            'route'       => '/detail[/:id]',
                            'defaults'    => [
                                'action' => 'detail',
                            ],
                            'constraints' => [
                                'id'     => '[1-9][0-9]*',
                            ],
                        ],
                    ],
                    'page'   => [
                        'type'    => Segment::class,
                        'options' => [
                            'route'       => '/:page',
                            'constraints' => [
                                'page' => '[1-9][0-9]*',
                            ],
                        ],
                    ],
                ],
            ],
            'project' => [
                'type'          => Literal::class,
                'options'       => [
                    'route'    => '/project',
                    'defaults' => [
                        'controller' => DisplayController::class,
                        'action'     => 'index',
                        'type'       => 'project',
                    ],
                ],
                'may_terminate' => true,
                'child_routes'  => [
                    'modify'   => [
                        'type'    => Segment::class,
                        'options' => [
                            'route'       => '/:action[/:id]',
                            'defaults'    => [
                                'controller' => ModifyController::class,
                            ],
                            'constraints' => [
                                'action' => '(add|edit|delete)',
                                'id'     => '[1-9][0-9]*',
                            ],
                        ],
                    ],
                    'detail' => [
                        'type'    => Segment::class,
                        'options' => [
                            'route'       => '/detail[/:id]',
                            'defaults'    => [
                                'action' => 'detail',
                            ],
                            'constraints' => [
                                'id'     => '[1-9][0-9]*',
                            ],
                        ],
                    ],
                    'page'   => [
                        'type'    => Segment::class,
                        'options' => [
                            'route'       => '/:page',
                            'constraints' => [
                                'page' => '[1-9][0-9]*',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];