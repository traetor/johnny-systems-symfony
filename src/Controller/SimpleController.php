<?php
// src/Controller/SimpleController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;

class SimpleController extends AbstractController
{
    /**
     * @Route("/simple", name="simple", methods={"GET"})
     * @OA\Get(
     *     path="/simple",
     *     summary="Simple example endpoint",
     *     @OA\Response(
     *         response=200,
     *         description="Simple response",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="This is a simple example.")
     *         )
     *     )
     * )
     */
    public function simple(): JsonResponse
    {
        return new JsonResponse(['message' => 'This is a simple example.']);
    }
}
