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

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\CsvNormaliser;

class CsvNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser(): CsvNormaliser
    {
        return new CsvNormaliser();
    }
}
