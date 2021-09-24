<?php

namespace Larasetups\Command;

use Illuminate\Console\Command;
use Larasetups\Presets\Bootstrap5;

class Bootstrap5Command extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:bootstrap5';

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
        Bootstrap5::install();
    }
}
