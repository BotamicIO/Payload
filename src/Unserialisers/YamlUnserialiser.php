<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Payload\Unserialisers;

use DraperStudio\Payload\Contracts\Unserialiser;
use DraperStudio\Payload\Utils\Mapper;
use Symfony\Component\Yaml\Yaml;

/**
 * Class YamlUnserialiser.
 */
class YamlUnserialiser implements Unserialiser
{
    /**
     * @param $input
     * @param null $class
     *
     * @return mixed
     */
    public function unserialise($input, $class = null)
    {
        $contents = Yaml::parse($input);

        if (!is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}
