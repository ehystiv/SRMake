<?php
declare(strict_types=1);

namespace Ehystiv\SRmake\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Contracts\Console\PromptsForMissingInput;

final class ServiceMakeCommand extends GeneratorCommand implements PromptsForMissingInput
{
    protected $signature = "make:service {name : The service name} ";

    protected $description = "Create a new Service";

    protected $type = 'class';

    protected function getStub(): string
    {
        return __DIR__ . "/../../../stubs/service.stub";
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return "App\\Http\\Services";
    }

    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array<string, string>
     */
    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'name' => 'What should it be called?',
        ];
    }
}
