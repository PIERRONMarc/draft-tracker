<?php

namespace App\Application\CommandBus\Handler;

use App\Application\CommandBus\Command\CreateGameCommand;

class CreateGameHandler
{
    public function handle(CreateGameCommand $command): mixed
    {
        dd('handled');
    }
}