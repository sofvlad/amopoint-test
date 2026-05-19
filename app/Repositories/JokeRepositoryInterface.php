<?php

declare(strict_types=1);

namespace App\Repositories;

use App\DTO\ExternalJokeDTO;
use App\Models\Joke;

interface JokeRepositoryInterface
{
    public function save(ExternalJokeDTO $data): Joke;
}
