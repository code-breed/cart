<?php

namespace Codebreed\Cart\Tests;

use Orchestra\Testbench\TestCase;
use Codebreed\Cart\CartServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app): array
    {
        return [CartServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
