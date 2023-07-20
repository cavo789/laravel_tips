<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Session;

class ClearSessions extends Command
{
	protected $signature = 'session:clear';
	protected $description = 'Clear all sessions';

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
	 *
	 * @return mixed
	 */
	public function handle()
	{
		// Call the native function, flush all sessions
		Session::flush();

		// When session aren't stored in the database, we also
		// have session files in a folder on the disk, remove
		// files from there
		$files = glob('storage/framework/sessions/*');

		try {
			for ($i = 0; $i < count($files); $i++) {
				unlink($files[$i]);
			}
		} catch (Exception $e) {
		}

		$this->info('Sessions have been cleared');
	}
}
