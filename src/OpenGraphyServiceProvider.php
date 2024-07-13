<?php

namespace Edeoliv\OpenGraphy;

use Edeoliv\OpenGraphy\Commands\ClearCache;
use Edeoliv\OpenGraphy\Commands\GenerateOpenGraphImage;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OpenGraphyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('open-graphy')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('web')
            ->hasCommands([
                ClearCache::class,
                GenerateOpenGraphImage::class,
            ])
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->askToStarRepoOnGitHub('edeoliv/laravel-open-graphy');
            });
    }
}
