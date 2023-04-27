<?php

namespace Flyzard\Maileditor;

use Flyzard\Maileditor\Commands\MaileditorCommand;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MaileditorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('maileditor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_maileditor_table')
            ->hasCommand(MaileditorCommand::class);
    }

    public function packageRegistered(): void
    {
        Route::macro('maileditor', function (string $prefix = 'maileditor') {
            Route::prefix($prefix)
                ->middleware('web')
                ->group(function () {
                    Route::get('/', [Controllers\MaileditorController::class, 'index'])->name('maileditor.index');
                });
        });
    }
}
