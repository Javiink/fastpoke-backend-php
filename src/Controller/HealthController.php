<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api')]
class HealthController
{
    #[Route('/health', methods: ['GET'])]
    public function __invoke()
    {
        return new JsonResponse([
            'status' => 'ok',
        ]);
    }
}
