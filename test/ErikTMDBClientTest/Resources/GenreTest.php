<?php

/*
 *  All rights reserved © 2020 Eptech.
 */

declare (strict_types = 1);

namespace Erik\ErikTMDBClientTest\Resources;

use Erik\ErikTMDBClient\Resources\Genre;
use PHPUnit\Framework\TestCase;

/**
 * Description of GenreTest
 *
 * @author Polácsek Erik<erikpolachek@gmail.com>
 */
class GenreTest extends TestCase
{
    public function testCreateGenreWithNullData()
    {
        $name = 'test genre';
        $tmdbId = 15;

        $genre = new Genre($name, $tmdbId, null);

        $this->assertSame($name, $genre->getName());
        $this->assertSame($tmdbId, $genre->getTmdbId());
        $this->assertNull($genre->getId());
    }

    public function testCreareGenreWithData()
    {
        $name = 'test genre';
        $tmdbId = 15;
        $id = 11;

        $genre = new Genre($name, $tmdbId, $id);

        $this->assertSame($name, $genre->getName());
        $this->assertSame($tmdbId, $genre->getTmdbId());
        $this->assertSame($id, $genre->getId());
    }
}
