<?php

declare(strict_types=1);

namespace Flyzard\Maileditor;

use Flyzard\Maileditor\Commands\MaileditorCommand;
use Flyzard\Maileditor\Http\Controllers\EnvelopeController;
use Flyzard\Maileditor\Http\Controllers\MaileditorController;
use Flyzard\Maileditor\Http\Middleware\HandleInertiaRequests;
use Flyzard\Maileditor\Models\MailTemplate;
use Flyzard\Maileditor\Observers\MailTemplateObserver;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Inertia\ServiceProvider as InertiaServiceProvider;
use Tightenco\Ziggy\ZiggyServiceProvider;

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

    public function registeringPackage(): void
    {
        $this->app->register(InertiaServiceProvider::class);
    }

    public function boot(): void
    {
        parent::boot();

        // Observe changes to the MailTemplate model for various effects, like creating slug or notifying owners
        MailTemplate::observe(MailTemplateObserver::class);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'maileditor');
    }

    public function packageRegistered(): void
    {
        $this->setupForTests();

        Route::macro('maileditor', function (string $baseUrl = 'maileditor'): void {
            Route::prefix($baseUrl)
                ->middleware([HandleInertiaRequests::class, 'web'])
                ->group(function () use ($baseUrl): void {
                    Route::resource('/envelope', EnvelopeController::class, ['as' => 'maileditor']);
                    Route::resource('/' , MaileditorController::class, [
                        'as' => $baseUrl, 
                        'parameters' => ['' => 'mailTemplate:slug'],
                        'names' => [
                            'index' => 'maileditor.index',
                            'create' => 'maileditor.create',
                            'store' => 'maileditor.store',
                            'show' => 'maileditor.show',
                            'edit' => 'maileditor.edit',
                            'update' => 'maileditor.update',
                            'destroy' => 'maileditor.destroy'
                        ]
                    ]);
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
