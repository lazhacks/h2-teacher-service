<?php

namespace Teacher\Service;

use Common\Db\Traits\FindByIdTrait;
use Common\Service\AbstractService;
use Common\Service\ServiceInterface;

class TeacherService extends AbstractService implements
    ServiceInterface
{
    use FindByIdTrait;
}
