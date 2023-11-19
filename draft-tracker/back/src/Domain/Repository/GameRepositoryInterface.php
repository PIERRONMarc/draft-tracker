<?php

namespace App\Domain\Repository;

use App\Domain\Game;

interface GameRepositoryInterface
{
    public function save(Game $game, bool $flush = true): void;
}