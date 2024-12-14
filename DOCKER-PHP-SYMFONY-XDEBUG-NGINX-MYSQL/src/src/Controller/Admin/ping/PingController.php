<?php

namespace App\Controller\Admin\ping;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PingController
{
    #[Route('/admin/ping.json', name: 'ping')]
    public function list(): Response
    {
        return new JsonResponse('pong');
    }
}
