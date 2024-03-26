<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use function Laravel\Prompts\text;

class HaloCommand extends Command
{

    protected $signature = 'app:halo';

    protected $description = 'Command description';

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
