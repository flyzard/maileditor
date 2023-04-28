<?php

namespace Flyzard\Maileditor;

use Flyzard\Maileditor\Commands\MaileditorCommand;
use Flyzard\Maileditor\Http\Controllers\MaileditorController;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MaileditorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('maileditor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_maileditor_table')
            ->hasCommand(MaileditorCommand::class);
    }

    public function packageRegistered(): void
    {
        // Route::get('maileditor', [MaileditorController::class, 'index']);

        Route::macro(
            'maileditor', function (string $baseUrl = 'maileditor') {
            Route::prefix($baseUrl)->group(function () {
                Route::get('/', [MaileditorController::class, 'index'])->name('maileditor.index');
            });
        });
    }
}
