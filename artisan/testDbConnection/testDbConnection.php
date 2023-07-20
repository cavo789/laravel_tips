<?php

namespace App\Console\Commands;

use DB;
use Illuminate\Console\Command;

class TestDbConnection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:test-connection';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testing DB connection';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        if ('production' == config('app.env')) {
            echo "This command can't be called on production environment!\n";

            return;
        }

        try {
            DB::connection()->getPDO();
            dump('Database is connected. Database Name is : ' . DB::connection()->getDatabaseName());
        } catch (Exception $e) {
            dump('Database connection failed');
        }
    }
}
