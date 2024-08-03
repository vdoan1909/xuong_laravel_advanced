<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ListUsers extends Command
{
    protected $signature = 'app:list-users';

    protected $description = 'Get all user from table users';

    public function handle()
    {
        $users = User::all();
        echo json_encode($users);
    }
}
