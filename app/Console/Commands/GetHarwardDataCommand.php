<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Http;
 
use Illuminate\Database\Eloquent\Model;

class GetHarwardDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'library:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'imports harward data';

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
 
        $response = Http::get('https://api.lib.harvard.edu/v2/collections?limit=100');
        $data = $response->json();
        Model::insert($data); // Eloquent approach
        DB::table('table')->insert($data); // Query Builder approach
    }
}
