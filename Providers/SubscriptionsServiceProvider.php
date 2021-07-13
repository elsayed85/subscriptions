<?php

declare(strict_types=1);

namespace elsayed85\Subscriptions\Providers;

use elsayed85\Subscriptions\Console\Commands\PublishMigrationCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SubscriptionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('tenant_subscriptions')
            ->hasConfigFile('tenant_subscriptions')
            ->hasCommands([
                PublishMigrationCommand::class
            ]);
    }
}
