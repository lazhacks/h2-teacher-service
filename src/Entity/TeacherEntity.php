<?php

namespace Teacher\Entity;

use Common\Entity\EntityInterface;

class TeacherEntity implements EntityInterface
{
    private $id;

    public function isValid()
    {
        return !!$this->id;
    }
}
