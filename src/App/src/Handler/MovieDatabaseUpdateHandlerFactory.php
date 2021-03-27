<?php

/*
 *  All rights reserved © 2020 Eptech.
 */

declare(strict_types=1);

namespace App\Handler;

use Erik\ErikTMDBClient\TMDBApiService;
use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Description of MovieDatabaseUpdateHandlerFactory
 *
 * @author Polácsek Erik<erikpolachek@gmail.com>
 */
class MovieDatabaseUpdateHandlerFactory
{
    public function __invoke(ContainerInterface $container): RequestHandlerInterface
    {
        $TMDBApiService = $container->get(TMDBApiService::class);
        return new MovieDatabaseUpdateHandler($TMDBApiService);
    }
}
