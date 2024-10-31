<?php

namespace JordanPartridge\UserMake;

use JordanPartridge\UserMake\Commands\UserMakeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UserMakeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('user-make')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_user_make_table')
            ->hasCommand(UserMakeCommand::class);
    }
}
