<?php

namespace App\Console\Commands;

use Artisan;
use Illuminate\Console\Command;

class TruncateTablesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DB:truncate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'truncating all tables';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info("Start Truncation");

        Artisan::call('db:seed',['--class' => "Database\\Seeders\\TruncationSeeder"  ] );

        $this->info("Truncation complete");

        return 0;
    }
}
