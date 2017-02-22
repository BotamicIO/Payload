<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Tests\Payload\Serialisers;

use BrianFaust\Payload\Serialisers\CsvSerialiser;

class CsvSerialiserTest extends AbstractTestCase
{
    protected function getExpectedOutput(): string
    {
        return 'hello
world
';
    }

    protected function getSerialiser(): CsvSerialiser
    {
        return new CsvSerialiser();
    }
}
