<?php

namespace Teacher\Action;

use Common\Http\RestfulActionTrait;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Teacher\Service\TeacherService;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router\RouterInterface;

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
     * @param RouterInterface $router
     * @param TeacherService $teacherService
     */
    public function __construct(
        RouterInterface $router,
        TeacherService $teacherService
    ) {
        $this->router         = $router;
        $this->teacherService = $teacherService;
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
        $teacher = $this->teacherService->findById(
            $request->getAttribute($this->identifier)
        );

        if (!$teacher->isValid()) {
            return $response->withStatus(404, 'Not Found');
        }

        return new JsonResponse([
            'id'         => $teacher->getId(),
            'first_name' => $teacher->getFirstName(),
            'last_name'  => $teacher->getLastName()
        ]);
    }
}
