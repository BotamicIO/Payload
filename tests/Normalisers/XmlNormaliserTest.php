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

use BrianFaust\Payload\Normalisers\XmlNormaliser;

class XmlNormaliserTest extends TestCase
{
    protected function getNormaliser(): XmlNormaliser
    {
        return new XmlNormaliser();
    }
}
