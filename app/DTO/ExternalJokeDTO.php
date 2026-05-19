<?php

declare(strict_types=1);

namespace App\DTO;

readonly class ExternalJokeDTO
{
    public function __construct(
        public int $id,
        public string $type,
        public string $setup,
        public string $punchline,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            id: (int) $data['id'],
            type: (string) $data['type'],
            setup: (string) $data['setup'],
            punchline: (string) $data['punchline'],
        );
    }
}
