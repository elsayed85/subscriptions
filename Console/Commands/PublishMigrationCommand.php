<?php

declare(strict_types=1);

namespace elsayed85\Subscriptions\Console\Commands;

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
        $this->alert($this->description);

        $to_path = 'database\migrations';
        if (!is_null($this->option('to'))) {
            $to_path .= "\\" . $this->option('to');
        }

        if (file_exists(base_path($to_path))) {
            File::copyDirectory(__DIR__ . "/../../database/migrations", base_path($to_path));
            $this->info('Publishing Is Done');
        } else {
            $this->info("Failed To Copy Files");
        }
    }
}
