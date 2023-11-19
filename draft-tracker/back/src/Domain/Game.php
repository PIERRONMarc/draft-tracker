<?php

namespace App\Domain;

class Game
{
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
