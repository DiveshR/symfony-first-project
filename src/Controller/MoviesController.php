<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies/{name}', name: 'app_movies', defaults:['name' => NULL], methods:['GET','HEAD'])]
    public function index($name): JsonResponse
    {
        return $this->json([
            'message' => 'Movie Name: '.$name,
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }
    
    /**
     * oldMethod
     *
     * @Route("/old", name="old")
     */
    public function oldMethod(): Response
    {
        return $this->json([
            'message' => 'Welcome to your Old controller!',
            'path' => 'src/Controller/oldMethod.php',
        ]);
    }
}
