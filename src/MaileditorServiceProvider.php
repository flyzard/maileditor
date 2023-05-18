<?php

declare(strict_types=1);

namespace Flyzard\Maileditor;

use Flyzard\Maileditor\Commands\MaileditorCommand;
use Flyzard\Maileditor\Http\Controllers\MaileditorController;
use Flyzard\Maileditor\Http\Middleware\HandleInertiaRequests;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MaileditorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('maileditor')
            ->hasCommand(MaileditorCommand::class);
    }

    public function boot(): void
    {
        parent::boot();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'maileditor');
    }

    public function packageRegistered(): void
    {
        Route::macro('maileditor', function (string $baseUrl = 'maileditor'): void {
            Route::prefix($baseUrl)
                ->middleware([HandleInertiaRequests::class])
                ->group(function (): void {
                    Route::get('/', [MaileditorController::class, 'index'])->name('maileditor.index');
                });
        });
    }
}
