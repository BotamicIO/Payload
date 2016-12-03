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

namespace BrianFaust\Payload\Writers;

use BrianFaust\Payload\Serialisers\XmlSerialiser;

class XmlWriter extends Writer
{
    public function write($path, $input): bool
    {
        return $this->put($path, (new XmlSerialiser())->serialise($input));
    }
}
