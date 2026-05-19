<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    protected $fillable = [
        'external_id',
        'type',
        'setup',
        'punchline',
    ];

    protected function casts(): array
    {
        return [
            'external_id' => 'integer',
        ];
    }
}
