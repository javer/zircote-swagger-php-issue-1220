<?php

namespace App\Controller;

use Nelmio\ApiDocBundle\Annotation as ApiDoc;
use OpenApi\Attributes as OA;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/api')]
class ApiController
{
    #[Route(path: '/action')]
    #[ApiDoc\Operation(['tags' => ['Version 1.0'], 'summary' => 'Do action'])]
    #[OA\Response(response: '200', description: 'OK')]
    public function action()
    {
    }
}
