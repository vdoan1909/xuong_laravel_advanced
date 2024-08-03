<?php

namespace App\Console\Commands;

use App\Jobs\SendBulkEmailsJob;
use App\Models\User;
use Illuminate\Console\Command;

class SendBulkEmails extends Command
{
    protected $signature = 'app:send-bulk-emails';

    protected $description = 'Command and queue job';

    public function handle()
    {
        $users = User::all();

        foreach($users as $user){
            SendBulkEmailsJob::dispatch($user);
        }
    }
}
