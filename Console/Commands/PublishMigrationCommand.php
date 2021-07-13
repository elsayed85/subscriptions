<?php

declare(strict_types=1);

namespace elsayed85\Subscriptions\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class PublishMigrationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elsayed85:publish-migration {--to= : publish to specific folder inside migration folder. default is landlord }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'publish migrations files';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $this->line('');
        $this->alert($this->description);

        $to_path = 'database\migrations';
        if (!is_null($this->option('to'))) {
            $to_path .= "\\" . $this->option('to');
        }

        if (file_exists(base_path($to_path))) {
            $files =  [
                'create_plans_table.php',
                'create_plan_features_table.php',
                'create_plan_subscriptions_table.php',
                'create_plan_subscription_usage_table.php'
            ];

            $now = Carbon::now();
            foreach ($files as $migrationFileName) {
                $new_file_name = $now->addSecond()->format('Y_m_d_His') . '_' . $migrationFileName;
                $this->info('copying ' . $new_file_name);
                if (file_exists($file = __DIR__ . "/../../database/migrations/{$migrationFileName}")) {
                    File::copy($file, base_path($to_path . "\\{$new_file_name}"));
                }
            }
            $this->line('');
            $this->alert('Publishing Is Done');
        } else {
            $this->info("Failed To Copy Files");
        }
    }
}
