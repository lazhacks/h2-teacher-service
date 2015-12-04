<?php

namespace Teacher\Factory;

use Common\Db\Mapper\Mapper;
use Teacher\Entity\TeacherEntity;
use Teacher\Service\TeacherService;
use Interop\Container\ContainerInterface;

class TeacherServiceFactory
{
    /**
     * @param ContainerInterface $container
     * @return TeacherService
     */
    public function __invoke(ContainerInterface $container)
    {
        $adapter             = $container->get('DbAdapter');
        $entityPrototype     = new TeacherEntity();

        $mapper = new Mapper(
            $adapter,
            $entityPrototype
        );

        $mapper->setEntityTable('teacher');

        return new TeacherService(
            $mapper,
            $entityPrototype
        );
    }
}