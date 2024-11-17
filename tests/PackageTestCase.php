<?php
declare(strict_types=1);

namespace Ehystiv\SRmake\Tests;

use Ehystiv\SRmake\Providers\PackageServiceProvider;
use Orchestra\Testbench\TestCase;

class PackageTestCase extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            PackageServiceProvider::class,
        ];
    }

    public function artisan($command, $parameters = [])
    {
        return 0;
    }

    public function be(\Illuminate\Contracts\Auth\Authenticatable $user, $driver = null)
    {
        return;
    }

    public function call($method, $uri, $parameters = [], $files = [], $server = [], $content = null, $changeHistory = true)
    {
        return response();
    }

    public function seed($class = 'DatabaseSeeder')
    {
        return;
    }
}
