<?php

declare(strict_types=1);

namespace App\Services\Clients;

use App\DTO\ExternalJokeDTO;
use App\Enums\HttpMethod;
use App\Exceptions\JokeClientException;
use App\Exceptions\JokeRequestFailedException;
use App\Exceptions\JokeServiceUnavailableException;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class JokeClient
{
    private const string BASE_URL = 'https://official-joke-api.appspot.com';

    /**
     * Массив задержек перед повтором при слудующей попытки (мс)
     */
    private const array DELAY_MS = [500, 1000, 2000];

    /**
     * @throws JokeClientException
     * @throws Throwable
     */
    public function getRandomJoke(): ExternalJokeDTO
    {
        return ExternalJokeDTO::fromArray($this->sendRequest(
            HttpMethod::GET,
            '/random_joke',
        )->json());
    }

    /**
     * Выполняет запрос с повторными попытками и экспоненциальной задержкой.
     *
     * @param HttpMethod $method
     * @param string $url
     * @param array $options
     * @return Response
     * @throws Throwable
     */
    private function sendRequest(HttpMethod $method, string $url, array $options = []): Response
    {
        $attempt = 0;
        $pendingRequest = Http::baseUrl(self::BASE_URL)
            ->beforeSending(function () use (&$attempt, $method, $url, $options) {
                $attempt++;
                Log::channel('joke-client')->debug('JokeClient: request sent', [
                    'attempt' => $attempt,
                    'method'  => $method->value,
                    'url'     => $url,
                    'options' => $options,
                ]);
            })
            ->afterResponse(function (Response $response) use (&$attempt) {
                Log::channel('joke-client')->debug('JokeClient: response received', [
                    'status' => $response->status(),
                    'headers' => $response->getHeaders(),
                    'body' => $response->body(),
                ]);
            })
            ->retry(
                self::DELAY_MS,
                function (Throwable $e) {
                    Log::channel('joke-client')->warning('JokeClient: request attempt failed', [
                        'error' => $e->getMessage(),
                    ]);

                    return $e instanceof ConnectionException;
                }
            );

        try {
            return $pendingRequest->send($method->value, $url, $options);
        } catch (Throwable $e) {
            if ($e instanceof ConnectionException) {
                throw new JokeServiceUnavailableException(previous: $e);
            }

            if ($e instanceof RequestException) {
                throw new JokeRequestFailedException(previous: $e);
            }

            throw $e;
        }
    }
}
