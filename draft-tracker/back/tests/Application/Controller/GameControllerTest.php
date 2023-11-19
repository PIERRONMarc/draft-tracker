<?php

namespace App\Tests\Application\Controller;

use App\Domain\Game;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GameControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $entityManager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->entityManager = static::getContainer()->get('doctrine')->getManager();
    }

    public function test_when_creating_a_game_then_it_returns_ok(): void
    {
        $this->client->request('POST', '/game');

        self::assertResponseIsSuccessful();

        $game = $this->entityManager->getRepository(Game::class)->findAll()[0];

        self::assertNotNull($game);
    }

}