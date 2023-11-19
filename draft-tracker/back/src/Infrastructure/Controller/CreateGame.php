<?php

namespace App\Infrastructure\Controller;

use App\Domain\Game;
use App\Domain\Repository\GameRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/game', name: 'game_create', methods: ['POST'])]
class CreateGame extends AbstractController
{
    public function __invoke(GameRepositoryInterface $gameRepository): JsonResponse
    {
        $game = new Game();
        $gameRepository->save($game);

        return $this->json([
            'id' => $game->getId(),
        ], 201);
    }
}
