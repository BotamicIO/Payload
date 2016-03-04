<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Payload\Utils;

use DraperStudio\Payload\Exceptions\FileDoesNotExistException;

/**
 * Class File.
 */
class File
{
    /**
     * @param $path
     *
     * @return mixed
     */
    public static function extension($path)
    {
        return pathinfo($path, PATHINFO_EXTENSION);
    }

    /**
     * @param $path
     *
     * @return bool
     */
    public static function exists($path)
    {
        return file_exists($path);
    }

    /**
     * @param $path
     *
     * @return string
     *
     * @throws FileDoesNotExistException
     */
    public static function contents($path)
    {
        if (self::exists($path)) {
            return trim(file_get_contents($path));
        }

        throw new FileDoesNotExistException(sprintf('%s is not a valid file', $path));
    }

    /**
     * @param $path
     *
     * @return mixed
     *
     * @throws FileDoesNotExistException
     */
    public static function get($path)
    {
        if (self::exists($path)) {
            return require $path;
        }

        throw new FileDoesNotExistException(sprintf('%s is not a valid file', $path));
    }

    /**
     * @param $path
     * @param $contents
     *
     * @return bool
     */
    public static function put($path, $contents)
    {
        return (bool) file_put_contents($path, $contents);
    }
}
