<?php

namespace RiteChoiceInnovations\TabUi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RitechoiceInnovations\TabUi\Commands\TabUiCommand;

class TabUiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tab-ui')
            ->hasConfigFile()
            ->hasViews()
            ->hasViewComponents('tab-ui')
            ->hasCommand(TabUiCommand::class);
    }

    public function boot()
    {
        dd("Hello from the package service provider");
    }
}
