<?php

declare(strict_types=1);

namespace App\Repositories;

use App\DTO\ExternalJokeDTO;
use App\Models\Joke;

class JokeRepository implements JokeRepositoryInterface
{
    public function save(ExternalJokeDTO $data): Joke
    {
        return Joke::updateOrCreate([
            'external_id' => $data->id,
            'type' => $data->type,
            'setup' => $data->setup,
            'punchline' => $data->punchline,
        ]);
    }
}
