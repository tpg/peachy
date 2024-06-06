<?php

declare(strict_types=1);

namespace TPG\Peachy\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestBench;
use TPG\Peachy\PeachyServiceProvider;

abstract class TestCase extends OrchestraTestBench
{
    protected function getPackageProviders($app): array
    {
        return [
            PeachyServiceProvider::class,
        ];
    }
}
