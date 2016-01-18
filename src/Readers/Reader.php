<?php

namespace DraperStudio\Payload\Readers;

use DraperStudio\Payload\Exceptions\InvalidFileTypeException;
use DraperStudio\Payload\Utils\File;

abstract class Reader
{
    protected $extensions = [];

    abstract public function read($path, $class = null);

    public function check($path)
    {
        $extension = File::extension($path);

        if (!in_array($extension, $this->extensions)) {
            throw new InvalidFileTypeException(
                sprintf('%s is an invalid file type for the %s class', $extension, get_class($this)));
        }

        return true;
    }

    public function contents($path)
    {
        if ($this->check($path)) {
            return File::contents($path);
        }
    }

    public function get($path)
    {
        if ($this->check($path)) {
            return File::get($path);
        }
    }
}
