<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DisplayMessage extends Command
{
    protected $signature = 'app:display-message';

   
    protected $description = 'Command basic';

    public function handle()
    {
        echo "Hello, this is your custom command!";
    }
}
