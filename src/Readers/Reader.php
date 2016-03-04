<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Payload\Readers;

use DraperStudio\Payload\Exceptions\InvalidFileTypeException;
use DraperStudio\Payload\Utils\File;

/**
 * Class Reader.
 */
abstract class Reader
{
    /**
     * @var array
     */
    protected $extensions = [];

    /**
     * @param $path
     * @param null $class
     *
     * @return mixed
     */
    abstract public function read($path, $class = null);

    /**
     * @param $path
     *
     * @return bool
     *
     * @throws InvalidFileTypeException
     */
    public function check($path)
    {
        $extension = File::extension($path);

        if (!in_array($extension, $this->extensions)) {
            throw new InvalidFileTypeException(
                sprintf('%s is an invalid file type for the %s class', $extension, get_class($this)));
        }

        return true;
    }

    /**
     * @param $path
     *
     * @return string
     *
     * @throws InvalidFileTypeException
     * @throws \DraperStudio\Payload\Exceptions\FileDoesNotExistException
     */
    public function contents($path)
    {
        if ($this->check($path)) {
            return File::contents($path);
        }
    }

    /**
     * @param $path
     *
     * @return mixed
     *
     * @throws InvalidFileTypeException
     * @throws \DraperStudio\Payload\Exceptions\FileDoesNotExistException
     */
    public function get($path)
    {
        if ($this->check($path)) {
            return File::get($path);
        }
    }
}
