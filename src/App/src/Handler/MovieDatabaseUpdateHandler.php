<?php

/*
 *  All rights reserved © 2020 Eptech.
 */

declare(strict_types=1);

namespace App\Handler;

use Erik\ErikTMDBClient\TMDBApiService;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Description of MovieDatabaseUpdateHandler
 *
 * @author Polácsek Erik<erikpolachek@gmail.com>
 */
class MovieDatabaseUpdateHandler implements RequestHandlerInterface
{
    private TMDBApiService $TMDBApiService;

    public function __construct(TMDBApiService $TMDBApiService)
    {
        $this->TMDBApiService = $TMDBApiService;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $this->TMDBApiService->updateMovieList();

        return new JsonResponse([
            'message' => 'Sync successfull',
        ]);
    }
}
