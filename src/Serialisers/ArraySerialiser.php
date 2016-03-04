<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Payload\Serialisers;

use DraperStudio\Payload\Contracts\Serialiser;

/**
 * Class ArraySerialiser.
 */
class ArraySerialiser implements Serialiser
{
    /**
     * @param $input
     *
     * @return mixed
     */
    public function serialise($input)
    {
        return var_export($input, true);
    }
}
