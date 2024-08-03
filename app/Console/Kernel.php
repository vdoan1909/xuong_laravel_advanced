<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    // local: php artisan schedule:work

    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('app:send-daily-report')->dailyAt('08:00');

        // cai nay` em test xem chay dc khong
        // $schedule->command('app:send-daily-report')->everyMinute(); 

        $schedule->command('app:send-weekly-email')->weeklyOn(1, '9:00')->withoutOverlapping();

        // cai nay` em test xem chay dc khong 
        // $schedule->command('app:send-weekly-email')->everyMinute();

        $schedule->command('app:send-bulk-emails')->weeklyOn(1, '10:00')->withoutOverlapping();
    }

    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
