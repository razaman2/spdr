<?php

    namespace App\Console\Commands;

    use GuzzleHttp\Client;
    use Illuminate\Console\Command;

    class GetEtf extends Command
    {
        /**
         * The name and signature of the console command.
         * @var string
         */
        protected $signature = 'command:get-etf';

        /**
         * The console command description.
         * @var string
         */
        protected $description = 'get etf\'s for spdr app.';

        /**
         * Execute the console command.
         * @return mixed
         */
        public function handle() {
            return (new Client())->get(env('APP_URL').'/api/eft/data/download');
        }
    }
