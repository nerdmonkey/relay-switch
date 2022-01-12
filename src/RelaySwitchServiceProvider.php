<?php

namespace Nerdmonkey\RelaySwitch;

use Nerdmonkey\RelaySwitch\Commands\RelaySwitchCommand;
use Nerdmonkey\LaravelPackageTools\Package;
use Nerdmonkey\LaravelPackageTools\PackageServiceProvider;

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
