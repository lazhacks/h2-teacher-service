<?php

namespace Teacher\Factory;

use Teacher\Action\TeacherAction;
use Teacher\Service\TeacherService;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;

class TeacherActionFactory
{
    /**
     * @param ContainerInterface $container
     * @return TeacherAction
     */
    public function __invoke(ContainerInterface $container)
    {
        $router            = $container->get(RouterInterface::class);
        $userService       = $container->get(TeacherService::class);
        $studentWebService = $container->get('StudentWebService');

        return new TeacherAction(
            $router,
            $userService,
            $studentWebService
        );
    }
}
