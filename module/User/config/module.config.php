<?php

namespace User;

use User\Controller\IndexController;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\Router\RouteInvokableFactory;

return [
    'router' => [
        'routes' => [
            'user' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/user',
                    'default' => [
                        'controller' => IndexController::class,
                        'action' => 'register'
                    ]
                ],
                'my_terminate' => true,
                'child_routes' => [
                    'default' => [
                        'type' => Segment::class,
                        'options' => [
                            //site.com.br/user/register/token/093343493
                            'route' => '[/:action][/token/:token]',
                            'constraints' => [
                                /*
                                 * Expressão regular
                                 */
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'token' => '[[a-f0-9]{32}]$'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'controllers' => [
        'factories' => [
            IndexController::class => RouteInvokableFactory::class
        ]
    ]
    ,
    'view_manager' => [
        'template_map' => [
            'user/index/confirmed-email' => __DIR__ . '/../view/user/index/confirmed-email.phtml',
            'user/index/new-password' => __DIR__ . '/../view/user/index/new-password.phtml',
            'user/index/recovered-password' => __DIR__ . '/../view/user/index/recovered-password.phtml',
            'user/index/register' => __DIR__ . '/../view/user/index/register.phtml',

        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ]
    ]
];