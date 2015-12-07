<?php

namespace Teacher\Action;

use Common\Http\RestfulActionTrait;
use Common\WebService\WebService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Teacher\Entity\TeacherEntity;
use Teacher\Service\TeacherService;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router\RouterInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class TeacherAction
{
    use RestfulActionTrait;

    /**
     * @var RouterInterface
     */
    private $router;

    /**
     * @var TeacherService
     */
    private $teacherService;

    /**
     * @var WebService|Client
     */
    private $studentWebService;

    /**
     * @param RouterInterface $router
     * @param TeacherService $teacherService
     * @param WebService $studentWebService
     */
    public function __construct(
        RouterInterface $router,
        TeacherService $teacherService,
        WebService $studentWebService
    ) {
        $this->router            = $router;
        $this->teacherService    = $teacherService;
        $this->studentWebService = $studentWebService;
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return JsonResponse
     */
    public function get(
        ServerRequestInterface $request,
        ResponseInterface $response,
        callable $next = null
    ) {
        $teacherId = $request->getAttribute(
            $this->identifier
        );

        /** @var TeacherEntity $teacher */
        $teacher = $this->teacherService->findById($teacherId);

        if (!$teacher->isValid()) {
            return $response->withStatus(404, 'Not Found');
        }

        /** @var Response $response */
        $response = $this->studentWebService->get(
            '/api/student',
            array('query' => array('teacher_id' => $teacherId))
        );

        $students = $this->studentWebService->getData($response);

        return new JsonResponse([
            'id'         => $teacher->getId(),
            'first_name' => $teacher->getFirstName(),
            'last_name'  => $teacher->getLastName(),
            'students'   => $students
        ]);
    }
}
