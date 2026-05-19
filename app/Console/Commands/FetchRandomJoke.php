<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Services\JokeService;
use Illuminate\Console\Command;
use Throwable;

class FetchRandomJoke extends Command
{
    protected $signature = 'joke:fetch';

    protected $description = 'Fetch a random joke from API and store it';

    public function handle(JokeService $service): int
    {
        $this->info('<fg=blue>Fetching random joke...</>');

        try {
            $joke = $service->fetchAndStoreRandomJoke();

            $this->newLine();
            $this->info('Done!');
            $this->comment("Type: {$joke->type}");
            $this->line("<fg=cyan>Setup:</> {$joke->setup}");
            $this->line("<fg=cyan>Punchline:</> {$joke->punchline}");

            return self::SUCCESS;
        } catch (Throwable $e) {
            $this->newLine();
            $this->error('<fg=red>Failed:</> ' . $e->getMessage());

            return self::FAILURE;
        }
    }
}
