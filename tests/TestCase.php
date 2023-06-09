<?php

namespace Flyzard\Maileditor\Tests;

use Flyzard\Maileditor\MaileditorServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Flyzard\\Maileditor\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );

        Route::maileditor();
    }

    protected function getPackageProviders($app)
    {
        return [
            MaileditorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_maileditor_table.php.stub';
        $migration->up();
        */
    }
}
