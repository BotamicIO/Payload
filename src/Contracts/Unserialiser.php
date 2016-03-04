<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Payload\Contracts;

/**
 * Interface Unserialiser.
 */
interface Unserialiser
{
    public function unserialise($input, $class = null);
}
