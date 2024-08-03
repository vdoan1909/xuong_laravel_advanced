<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class BTVN3Controller extends Controller
{
    public function commandBasic()
    {
        Artisan::call('app:display-message');
    }

    public function ListUsers()
    {
        Artisan::call('app:list-users');
    }

    public function clearOldLogs()
    {
        Artisan::call('app:clear-old-logs');
    }

    public function sendDailyReport()
    {
        Artisan::call('app:send-daily-report');
    }

    public function sendWeeklyEmail()
    {
        Artisan::call('app:send-weekly-email');
    }

    public function sendBulkEmail()
    {
        Artisan::call('app:send-bulk-emails');
    }
}
