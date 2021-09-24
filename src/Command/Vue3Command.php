<?php

namespace Larasetups\Command;

use Illuminate\Console\Command;
use Larasetups\Presets\Vue3;

class Vue3Command extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:vue3';

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
        Vue3::install();

        $this->info('Vue scaffolding installed successfully.');
        $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }
}
