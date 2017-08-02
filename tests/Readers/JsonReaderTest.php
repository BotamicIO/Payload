<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\JsonReader;

class JsonReaderTest extends TestCase
{
    protected function getFileExtension(): string
    {
        return 'json';
    }

    protected function getReader(): JsonReader
    {
        return new JsonReader();
    }
}
