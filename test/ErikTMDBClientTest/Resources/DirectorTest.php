<?php

/*
 *  All rights reserved © 2020 Eptech.
 */

declare (strict_types = 1);

namespace Erik\ErikTMDBClientTest\Resources;

use DateTimeImmutable;
use Erik\ErikTMDBClient\Resources\Director;
use PHPUnit\Framework\TestCase;

/**
 * Description of DirectorTest
 *
 * @author Polácsek Erik<erikpolachek@gmail.com>
 */
class DirectorTest extends TestCase
{
    public function testCreateDirectorWithNullData()
    {
        $direactorName = 'test director';
        $tmdbId = 15;
        $biography = "lorem ipsum dolor";

        $director = new Director($direactorName, $tmdbId, $biography, null, null);

        $this->assertSame($direactorName, $director->getName());
        $this->assertSame($tmdbId, $director->getTmdbId());
        $this->assertSame($biography, $director->getBiography());
        $this->assertNull($director->getDateOfBirth());
        $this->assertNull($director->getId());
    }

    public function testCreareDirectorWithData()
    {
        $direactorName = 'test director';
        $tmdbId = 15;
        $biography = "lorem ipsum dolor";
        $dateOfBirth = new DateTimeImmutable('now');
        $id = 11;

        $director = new Director($direactorName, $tmdbId, $biography, $dateOfBirth, $id);

        $this->assertSame($direactorName, $director->getName());
        $this->assertSame($tmdbId, $director->getTmdbId());
        $this->assertSame($biography, $director->getBiography());
        $this->assertSame($dateOfBirth, $director->getDateOfBirth());
        $this->assertSame($id, $director->getId());
    }
}
