<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Company;
use App\Models\Drug;
use App\Models\Customer;
use GuzzleHttp\Promise\Create;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       
        $company = Company::with('drugs' , 'drugs.company')->first();
        dd($company->toArray());

        // $drug = Drug::first();
        // dd($drug->company->toArray());


        dd("done");
    }
}
