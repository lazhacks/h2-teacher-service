<?php

namespace Teacher\Service;

use Common\Db\Traits\FindByIdTrait;
use Common\Service\AbstractService;
use Common\Service\ServiceInterface;
use Common\WebService\WebService;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use Teacher\Entity\TeacherEntity;

class TeacherService extends AbstractService implements
    ServiceInterface
{
    use FindByIdTrait;

    public function findByIdWithClassroom($teacherId, WebService $studentWebService) {
        /** @var TeacherEntity $teacher */
        $teacher = $this->findById($teacherId);

        if (!$teacher->isValid()) {
            return $teacher;
        }

        if ($teacher->hasStudents()) {
            return $teacher;
        }

        /** @var Response $response */
        /** @var Client|WebService $studentWebService */
        $response = $studentWebService->get(
            '/api/student',
            array('query' => array('teacher_id' => $teacherId))
        );

        $teacher->setStudents(
            $studentWebService->getData($response)
        );

        $key = $this->cache->createKey($teacherId);
        $this->cache->set($key, $teacher);

        return $teacher;
    }
}
