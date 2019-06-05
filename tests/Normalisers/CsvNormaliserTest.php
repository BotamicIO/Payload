<?php

declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\CsvNormaliser;

class CsvNormaliserTest extends TestCase
{
    protected function getNormaliser(): CsvNormaliser
    {
        return new CsvNormaliser();
    }
}
