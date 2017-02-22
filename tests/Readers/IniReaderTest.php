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

namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\IniReader;

class IniReaderTest extends AbstractTestCase
{
    protected function getFileExtension(): string
    {
        return 'ini';
    }

    protected function getReader(): IniReader
    {
        return new IniReader();
    }
}
