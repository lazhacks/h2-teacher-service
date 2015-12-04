<?php

return [
    'dependencies' => [
        'invokables' => [
            //App\Action\PingAction::class => App\Action\PingAction::class,
        ],
        'factories' => [
            Teacher\Action\TeacherAction::class => Teacher\Factory\TeacherActionFactory::class,
            Teacher\Service\TeacherService::class => Teacher\Factory\TeacherServiceFactory::class,


            //App\Action\HomePageAction::class => App\Action\HomePageFactory::class,
            Zend\Expressive\Application::class => Zend\Expressive\Container\ApplicationFactory::class,
        ],
        'abstract_factories' => [
            Zend\Db\Adapter\AdapterAbstractServiceFactory::class,
            //Zend\Cache\Service\StorageCacheAbstractServiceFactory::class
        ],
    ]
];
