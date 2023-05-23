<?php

declare(strict_types=1);

namespace Flyzard\Maileditor;

use Flyzard\Maileditor\Commands\MaileditorCommand;
use Flyzard\Maileditor\Http\Controllers\MaileditorController;
use Flyzard\Maileditor\Http\Middleware\HandleInertiaRequests;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Inertia\ServiceProvider as InertiaServiceProvider;

class MaileditorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('maileditor')
            ->hasMigrations([
                'maileditor_create_envelopes_table',
                'maileditor_create_mail_templates_table'
            ])
            ->runsMigrations(true)
            ->hasCommand(MaileditorCommand::class);
    }

    public function boot(): void
    {
        parent::boot();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'maileditor');
    }

    public function packageRegistered(): void
    {
        $this->setupForTests();

        Route::macro('maileditor', function (string $baseUrl = 'maileditor'): void {
            Route::prefix($baseUrl)
                ->middleware([HandleInertiaRequests::class, 'web'])
                ->group(function (): void {
                    Route::get('/', [MaileditorController::class, 'index'])->name('maileditor.index');
                });
        });
    }

    protected function setupForTests(): void
    {
        if (env('APP_ENV') === 'testing') {
            config()->set('inertia.testing.page_paths', [
                __DIR__.'/../resources/js/Pages/',
            ]);
            config()->set('inertia.testing.page_extensions', [
                'vue',
                'js',
                'jsx',
                'ts',
                'tsx',
                'html',
                'svelte',
                'blade.php',
            ]);

            
            (new InertiaServiceProvider($this->app))->register();
        }
    }
}
