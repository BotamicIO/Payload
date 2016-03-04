<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Payload\Writers;

use DraperStudio\Payload\Utils\File;

/**
 * Class Writer.
 */
abstract class Writer
{
    /**
     * @param $path
     * @param $input
     *
     * @return mixed
     */
    abstract public function write($path, $input);

    /**
     * @param $path
     * @param $contents
     *
     * @return bool
     */
    public function put($path, $contents)
    {
        return File::put($path, $contents);
    }
}
