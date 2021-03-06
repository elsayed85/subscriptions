<?php

declare(strict_types=1);

return [
    // Subscriptions Database Tables
    'tables' => [
        'plans' => 'plans',
        'plan_features' => 'plan_features',
        'plan_subscriptions' => 'plan_subscriptions',
        'plan_subscription_usage' => 'plan_subscription_usage',
    ],

    // Subscriptions Models
    'models' => [
        'plan' => \elsayed85\Subscriptions\Models\Plan::class,
        'plan_feature' => \elsayed85\Subscriptions\Models\PlanFeature::class,
        'plan_subscription' => \elsayed85\Subscriptions\Models\PlanSubscription::class,
        'plan_subscription_usage' => \elsayed85\Subscriptions\Models\PlanSubscriptionUsage::class,
    ],

    "features" => [
        "values" => [
            'true' => "T",
            'false' => "F"
        ]
    ],

    "subscriptions" => [
        'default' => 'main'
    ]
];
