<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StartServer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:start-server';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run php artisan serve and npm run dev';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {

        $this->info('Starting Laravel development server...');
        $serverProcess = popen("php artisan serve", "r");
        if($serverProcess) {
            $this->info('Laravel development server started.');
            $this->info('Starting npm run dev...');
            $npmProcess = popen("npm run dev", "r");
            if($npmProcess)
            {
                $this->info('npm Vite started.');
                $this->info('npm Sass started.');
                $sassWatchProcess = popen("npm run sass:watch", "r");

            }else{
                $this->error('Failed to start npm run dev.');
            }

        }

        while (!feof($serverProcess) && !feof($npmProcess) && feof($sassWatchProcess)) {
            echo fgets($serverProcess);
            echo fgets($npmProcess);
            echo fgets($sassWatchProcess);
        }

        pclose($serverProcess);
        pclose($npmProcess);
        pclose($sassWatchProcess);
    }
}
