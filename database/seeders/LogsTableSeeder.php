<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogsTableSeeder extends Seeder
{

    public function run(): void
    {
        $startDate = Carbon::create(2024, 6, 1);
        $endDate = Carbon::now();

        // neu startDate <= endDate tuc la tu 1/6 cho den hien tai thi moi them
        while ($startDate->lessThanOrEqualTo($endDate)) {
            DB::table('logs')->insert([
                'message' => 'Van doan ' . $startDate->toDateString(),
                'created_at' => $startDate,
                'updated_at' => $startDate,
            ]);

            // tang them 1 ngay`
            $startDate->addDay();
        }

    }
}
