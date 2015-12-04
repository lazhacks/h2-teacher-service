<?php

return [
    'dependencies' => [
        'factories' => [
            Teacher\Action\TeacherAction::class => Teacher\Factory\TeacherActionFactory::class,
            Teacher\Service\TeacherService::class => Teacher\Factory\TeacherServiceFactory::class,

            Zend\Expressive\Application::class => Zend\Expressive\Container\ApplicationFactory::class,
        ],
        'abstract_factories' => [
            Zend\Db\Adapter\AdapterAbstractServiceFactory::class,
            Zend\Cache\Service\StorageCacheAbstractServiceFactory::class
        ],

        'initializers' => [
            Common\Cache\RedisCacheInitializer::class
        ],
    ]
];
