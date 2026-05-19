<?php

declare(strict_types=1);

namespace App\Services;

use App\Exceptions\JokeClientException;
use App\Models\Joke;
use App\Repositories\JokeRepositoryInterface;
use App\Services\Clients\JokeClient;
use Throwable;

readonly class JokeService
{
    public function __construct(
        private JokeClient $client,
        private JokeRepositoryInterface $repository,
    ) {
    }

    /**
     * @return Joke
     * @throws JokeClientException
     * @throws Throwable
     */
    public function fetchAndStoreRandomJoke(): Joke
    {
        $jokeData = $this->client->getRandomJoke();

        return $this->repository->save($jokeData);
    }
}
