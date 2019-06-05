<?php

declare(strict_types=1);

/*
 * This file is part of Payload.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Payload\Readers;

use BrianFaust\Payload\Readers\IniReader;

class IniReaderTest extends TestCase
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
