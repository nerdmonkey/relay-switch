<?php

namespace Nerdmonkey\RelaySwitch\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nerdmonkey\RelaySwitch\RelaySwitchServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Nerdmonkey\\RelaySwitch\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            RelaySwitchServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_relay-switch_table.php.stub';
        $migration->up();
        */
    }
}
