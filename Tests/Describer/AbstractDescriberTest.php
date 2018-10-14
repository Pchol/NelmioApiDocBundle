<?php

/*
 * This file is part of the NelmioApiDocBundle package.
 *
 * (c) Nelmio
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\Tests\Describer;

use PHPUnit\Framework\TestCase;
use Swagger\Annotations\Swagger;

abstract class AbstractDescriberTest extends TestCase
{
    protected $describer;

    protected function getSwaggerDoc(): Swagger
    {
        $api = new Swagger([]);
        $this->describer->describe($api);

        return $api;
    }
}
