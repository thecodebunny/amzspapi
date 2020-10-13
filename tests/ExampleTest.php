<?php

namespace Thecodebunny\AmzSpApi\Tests;

use Orchestra\Testbench\TestCase;
use Thecodebunny\AmzSpApi\AmzSpApiServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AmzSpApiServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
