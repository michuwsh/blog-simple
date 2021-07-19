<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class RemoveOldComments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comments:remove {days}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove old comments';

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
     * @return int
     */
    public function handle()
    {   
        $date = date( 'Y-m-d H:i:s', strtotime( date( 'Y-m-d H:i:s') .' -' . $this->argument('days') .' day' ));
        $count = DB::table('comments')
            ->where('created_at', '<', $date)
            ->delete();

        $this->info('Removed ' . $count . ' comments older by date ' .$date . '!');
    }
}
