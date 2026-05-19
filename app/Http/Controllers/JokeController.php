<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JokeController extends Controller
{
    public function index(): JsonResponse
    {
        $jokes = Joke::all();

        return response()->json($jokes);
    }
}
