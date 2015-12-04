<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\ZendRouter::class,
        ],
    ],

    'routes' => [
        [
            'name' => 'api.teacher',
            'path' => '/api/teacher[/:id]',
            'middleware' => Teacher\Action\TeacherAction::class,
            'allowed_methods' => ['GET'],
        ],
    ],
];
