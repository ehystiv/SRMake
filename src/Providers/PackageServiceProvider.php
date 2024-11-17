<?php
declare(strict_types=1);

namespace Ehystiv\SRmake\Providers;

use Ehystiv\SRmake\Console\Commands\ServiceMakeCommand;
use Illuminate\Support\ServiceProvider;

final class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                commands: [
                    ServiceMakeCommand::class,
                ],
            );
        }
    }
}
