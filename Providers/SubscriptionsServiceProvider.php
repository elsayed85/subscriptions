<?php

declare(strict_types=1);

namespace elsayed85\Subscriptions\Providers;

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
                'create_plans_table',
                'create_plan_features_table',
                'create_plan_subscriptions_table',
                'create_plan_subscription_usage_table'
            ]);
    }
}
