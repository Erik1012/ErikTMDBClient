<?php

/*
 *  All rights reserved © 2020 Eptech.
 */

declare (strict_types = 1);

namespace Erik\ErikTMDBClientTest\Resources;

use PHPUnit\Framework\TestCase;

/**
 * Description of MovieTest
 *
 * @author Polácsek Erik<erikpolachek@gmail.com>
 */
class MovieTest extends TestCase
{
    public function testCreateDirectorWithNullData()
    {
        $title = 'test movie title';
        $length = 60;
        $releaseDate = new \DateTimeImmutable('now');
        $overview = 'test movie overview';
        $posterUrl = 'test movie poster url';
        $tmdbId = 15;
        $tmdbVoteAvarage = 8.2;
        $tmdbVoteCount = 30;
        $tmdbUrl = 'test movie tmdb url';
        $genres = $this->createMock(\Erik\ErikTMDBClient\Resources\GenreCollection::class);

        $movie = new \Erik\ErikTMDBClient\Resources\Movie(
            $title,
            $length,
            $releaseDate,
            $overview,
            $posterUrl,
            $tmdbId,
            $tmdbVoteAvarage,
            $tmdbVoteCount,
            $tmdbUrl,
            $genres,
            null,
            null
        );

        $this->assertSame($title, $movie->getTitle());
        $this->assertSame($length, $movie->getLength());
        $this->assertSame($releaseDate, $movie->getReleaseDate());
        $this->assertSame($overview, $movie->getOverview());
        $this->assertSame($posterUrl, $movie->getPosterUrl());
        $this->assertSame($tmdbId, $movie->getTmdbId());
        $this->assertSame($tmdbVoteAvarage, $movie->getTmdbVoteAvarage());
        $this->assertSame($tmdbVoteCount, $movie->getTmdbVoteCount());
        $this->assertSame($tmdbUrl, $movie->getTmdbUrl());
        $this->assertSame($genres, $movie->getGenres());
        $this->assertNull($movie->getDirector());
        $this->assertNull($movie->getId());
    }

    public function testCreareDirectorWithData()
    {
        $title = 'test movie title';
        $length = 60;
        $releaseDate = new \DateTimeImmutable('now');
        $overview = 'test movie overview';
        $posterUrl = 'test movie poster url';
        $tmdbId = 15;
        $tmdbVoteAvarage = 8.2;
        $tmdbVoteCount = 30;
        $tmdbUrl = 'test movie tmdb url';
        $genres = $this->createMock(\Erik\ErikTMDBClient\Resources\GenreCollection::class);
        $director = $this->createMock(\Erik\ErikTMDBClient\Resources\Director::class);
        $id = 11;

        $movie = new \Erik\ErikTMDBClient\Resources\Movie(
            $title,
            $length,
            $releaseDate,
            $overview,
            $posterUrl,
            $tmdbId,
            $tmdbVoteAvarage,
            $tmdbVoteCount,
            $tmdbUrl,
            $genres,
            $director,
            $id
        );

        $this->assertSame($title, $movie->getTitle());
        $this->assertSame($length, $movie->getLength());
        $this->assertSame($releaseDate, $movie->getReleaseDate());
        $this->assertSame($overview, $movie->getOverview());
        $this->assertSame($posterUrl, $movie->getPosterUrl());
        $this->assertSame($tmdbId, $movie->getTmdbId());
        $this->assertSame($tmdbVoteAvarage, $movie->getTmdbVoteAvarage());
        $this->assertSame($tmdbVoteCount, $movie->getTmdbVoteCount());
        $this->assertSame($tmdbUrl, $movie->getTmdbUrl());
        $this->assertSame($genres, $movie->getGenres());
        $this->assertSame($director, $movie->getDirector());
        $this->assertSame($id, $movie->getId());
    }
}
