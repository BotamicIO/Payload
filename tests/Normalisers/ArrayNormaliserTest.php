<?php

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Normalisers;

use BrianFaust\Payload\Normalisers\ArrayNormaliser;

class ArrayNormaliserTest extends TestCase
{
    protected function getNormaliser(): ArrayNormaliser
    {
        return new ArrayNormaliser();
    }
}
