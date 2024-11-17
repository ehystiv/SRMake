<?php

declare(strict_types=1);

use Ehystiv\SRmake\Console\Commands\ServiceMakeCommand;
use Illuminate\Support\Facades\File;

use function PHPUnit\Framework\assertTrue;

it('can run the command successfully', function () {
    $this
        ->artisan(ServiceMakeCommand::class, ['name' => 'Test'])
        ->assertSuccessful();
});

it('create the service', function (string $class) {
    $this->artisan(
        ServiceMakeCommand::class,
        ['name' => $class],
    )->assertSuccessful();

    assertTrue(
        File::exists(
            path: app_path("DataObjects/$class.php"),
        ),
    );
})->with('classes');
