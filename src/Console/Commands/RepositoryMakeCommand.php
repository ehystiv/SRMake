<?php
declare(strict_types=1);

namespace Ehystiv\SRmake\Console\Commands;

use Illuminate\Console\GeneratorCommand;

final class RepositoryMakeCommand extends GeneratorCommand
{
    protected $signature = "make:repository {name : The repository name}";

    protected $description = "Create a new Repository";

    protected $type = 'Repository';

    protected function getStub(): string
    {
        return __DIR__ . "/../../../stubs/repository.stub";
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return "{$rootNamespace}\\Http\\Repositories";
    }
}
