<?php

namespace App\Console\Commands;

use App\Jobs\SendWeeklyEmailJob;
use App\Models\User;
use Illuminate\Console\Command;

class SendWeeklyEmail extends Command
{
    protected $signature = 'app:send-weekly-email';

    protected $description = 'Send email for all user on monday at 9 am';

    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {
            SendWeeklyEmailJob::dispatch($user);
        }
    }
}
