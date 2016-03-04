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
 * Interface Serialiser.
 */
interface Serialiser
{
    /**
     * @param $input
     *
     * @return mixed
     */
    public function serialise($input);
}
