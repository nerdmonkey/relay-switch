<?php

namespace Nerdmonkey\RelaySwitch;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Nerdmonkey\RelaySwitch\Commands\RelaySwitchCommand;

class RelaySwitchServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('relay-switch')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_switches_table')
            ->hasCommand(RelaySwitchCommand::class);
    }
}
