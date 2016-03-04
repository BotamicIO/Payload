<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Tests\Payload\Normalisers;

use DraperStudio\Payload\Normalisers\YamlInlineNormaliser;

/**
 * This is the yaml-inline normaliser test class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class YamlInlineNormaliserTest extends AbstractTestCase
{
    protected function getNormaliser()
    {
        return new YamlInlineNormaliser();
    }
}
