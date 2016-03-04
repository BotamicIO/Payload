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
 * Interface Normaliser.
 */
interface Normaliser
{
    /**
     * @return mixed
     */
    public function serialiser();

    /**
     * @return mixed
     */
    public function unserialiser();

    /**
     * @return mixed
     */
    public function writer();

    /**
     * @return mixed
     */
    public function reader();
}
