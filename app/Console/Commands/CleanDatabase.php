<?php

namespace App\Console\Commands;

use App\Models\Models\Message;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;

class CleanDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laracarte:clean-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean Database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Cleaning database....');
        Message::where('created_at', '<=', Carbon::parse('2 months ago'))->delete();
        $this->info('Database cleaned');
    }
}
