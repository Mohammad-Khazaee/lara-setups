<?php

namespace Larasetups\Command;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class BootstrapVue2Command extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:bv2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        Artisan::call('install:bootstrap5');
        Artisan::call('install:vue2');

        $this->info('bootstrap 5 & vue 2 scaffolding installed successfully.');
        $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }
}
