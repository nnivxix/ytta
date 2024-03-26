<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use function Laravel\Prompts\text;

class HaloCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:halo';

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
        $name = text(
            label: 'What is your name?',
            placeholder: 'E.g. Taylor Otwell',
            hint: 'This will be displayed on your profile.'
        );
        $this->info($name);
    }
}
