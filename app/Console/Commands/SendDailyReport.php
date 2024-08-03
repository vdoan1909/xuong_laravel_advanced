<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendDailyReport extends Command
{
    protected $signature = 'app:send-daily-report';

    protected $description = 'write log: Daily report sent';

    public function handle()
    {
        Log::channel('btvn3')->info("Daily report sent");
    }
}
