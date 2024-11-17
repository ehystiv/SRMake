<?php
declare(strict_types=1);

namespace Ehystiv\SRmake\Console\Commands;

use Illuminate\Console\GeneratorCommand;

final class ServiceMakeCommand extends GeneratorCommand
{
    protected $signature = "make:service {name : The DTO Name}";

    protected $description = "Create a new Service";

    protected $type = 'Service';

    protected function getStub(): string
    {
        return __DIR__ . "/../../../stubs/service.stub";
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return "{$rootNamespace}\\SRmake";
    }
}
