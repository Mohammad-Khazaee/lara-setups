<?php

namespace Larasetups\Command;

use Illuminate\Console\Command;
use Larasetups\Presets\Vue2;

class Vue2Command extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:vue2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'insstall latest vue 2 to your application';

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
        Vue2::install();

        $this->info('Vue 3 scaffolding installed successfully.');
        $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }
}
