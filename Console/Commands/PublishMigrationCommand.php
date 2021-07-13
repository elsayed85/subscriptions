<?php

declare(strict_types=1);

namespace elsayed85\Subscriptions\Console\Commands;

use Illuminate\Console\Command;

class PublishMigrationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elsayed85:publish-migration {--to : publish to specific folder inside migration folder. default is landlord }';

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

        $this->output("to : {$this->option('to')}");
    }
}
