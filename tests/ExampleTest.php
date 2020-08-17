<?php

namespace Thinklifepot\MVC\Tests;

use Orchestra\Testbench\TestCase;
use Thinklifepot\MVC\MVCServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MVCServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
