<?php

declare(strict_types=1);

namespace elsayed85\Subscriptions;

use elsayed85\Subscriptions\Console\Commands\MigrateCommand;
use elsayed85\Subscriptions\Console\Commands\PublishCommand;
use elsayed85\Subscriptions\Console\Commands\RollbackCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SubscriptionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('subscriptions')
            ->hasConfigFile('subscriptions')
            ->hasRoute('subscriptions')
            ->hasMigrations([
                '2020_01_01_000001_create_plans_table',
                '2020_01_01_000002_create_plan_features_table',
                '2020_01_01_000004_create_plan_subscription_usage_table'
            ])
            ->hasCommand(MigrateCommand::class)
            ->hasCommand(PublishCommand::class)
            ->hasCommand(RollbackCommand::class);
    }
}
