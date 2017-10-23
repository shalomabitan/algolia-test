<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Log;

class PopulateData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refreshs the data';

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
        //instantiate client
        $client = new \App\Services\CMS\Client;
        //call the function get data
        $client->getData();

    }
}
