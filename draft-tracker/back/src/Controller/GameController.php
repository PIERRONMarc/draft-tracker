<?php

namespace App\Controller;

use App\Entity\Game;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    #[Route('/game', name: 'game_create', methods: ['POST'])]
    public function index(EntityManagerInterface $entityManager): JsonResponse
    {
        $game = new Game();

        $entityManager->persist($game);
        $entityManager->flush();

        return $this->json([
            'id' => $game->getId(),
        ], 201);
    }
}
