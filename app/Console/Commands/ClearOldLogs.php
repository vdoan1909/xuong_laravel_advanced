<?php

namespace App\Console\Commands;

use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ClearOldLogs extends Command
{
    // https://stackoverflow.com/questions/41122265/laravel-carbon-subtract-days-from-current-date
    protected $signature = 'app:clear-old-logs';

    protected $description = 'Remove data from table logs if created_at > 30';

    public function handle()
    {
        // subDays: tru` di so ngay trong ()
        // subDay tru` di 1 ngay` tinh' tu ngay` hom nay
        $logs = Log::where("created_at", "<", Carbon::now()->subDays(30));
        $logs->delete();
        echo json_encode(Log::all());
    }
}

// Ket qua sau khi xoa:

// [
//     {
//       "id": 35,
//       "message": "Van doan 2024-07-05",
//       "created_at": "2024-07-05T00:00:00.000000Z",
//       "updated_at": "2024-07-05T00:00:00.000000Z"
//     },
//     {
//       "id": 36,
//       "message": "Van doan 2024-07-06",
//       "created_at": "2024-07-06T00:00:00.000000Z",
//       "updated_at": "2024-07-06T00:00:00.000000Z"
//     },
//     {
//       "id": 37,
//       "message": "Van doan 2024-07-07",
//       "created_at": "2024-07-07T00:00:00.000000Z",
//       "updated_at": "2024-07-07T00:00:00.000000Z"
//     },
//     {
//       "id": 38,
//       "message": "Van doan 2024-07-08",
//       "created_at": "2024-07-08T00:00:00.000000Z",
//       "updated_at": "2024-07-08T00:00:00.000000Z"
//     },
//     {
//       "id": 39,
//       "message": "Van doan 2024-07-09",
//       "created_at": "2024-07-09T00:00:00.000000Z",
//       "updated_at": "2024-07-09T00:00:00.000000Z"
//     },
//     {
//       "id": 40,
//       "message": "Van doan 2024-07-10",
//       "created_at": "2024-07-10T00:00:00.000000Z",
//       "updated_at": "2024-07-10T00:00:00.000000Z"
//     },
//     {
//       "id": 41,
//       "message": "Van doan 2024-07-11",
//       "created_at": "2024-07-11T00:00:00.000000Z",
//       "updated_at": "2024-07-11T00:00:00.000000Z"
//     },
//     {
//       "id": 42,
//       "message": "Van doan 2024-07-12",
//       "created_at": "2024-07-12T00:00:00.000000Z",
//       "updated_at": "2024-07-12T00:00:00.000000Z"
//     },
//     {
//       "id": 43,
//       "message": "Van doan 2024-07-13",
//       "created_at": "2024-07-13T00:00:00.000000Z",
//       "updated_at": "2024-07-13T00:00:00.000000Z"
//     },
//     {
//       "id": 44,
//       "message": "Van doan 2024-07-14",
//       "created_at": "2024-07-14T00:00:00.000000Z",
//       "updated_at": "2024-07-14T00:00:00.000000Z"
//     },
//     {
//       "id": 45,
//       "message": "Van doan 2024-07-15",
//       "created_at": "2024-07-15T00:00:00.000000Z",
//       "updated_at": "2024-07-15T00:00:00.000000Z"
//     },
//     {
//       "id": 46,
//       "message": "Van doan 2024-07-16",
//       "created_at": "2024-07-16T00:00:00.000000Z",
//       "updated_at": "2024-07-16T00:00:00.000000Z"
//     },
//     {
//       "id": 47,
//       "message": "Van doan 2024-07-17",
//       "created_at": "2024-07-17T00:00:00.000000Z",
//       "updated_at": "2024-07-17T00:00:00.000000Z"
//     },
//     {
//       "id": 48,
//       "message": "Van doan 2024-07-18",
//       "created_at": "2024-07-18T00:00:00.000000Z",
//       "updated_at": "2024-07-18T00:00:00.000000Z"
//     },
//     {
//       "id": 49,
//       "message": "Van doan 2024-07-19",
//       "created_at": "2024-07-19T00:00:00.000000Z",
//       "updated_at": "2024-07-19T00:00:00.000000Z"
//     },
//     {
//       "id": 50,
//       "message": "Van doan 2024-07-20",
//       "created_at": "2024-07-20T00:00:00.000000Z",
//       "updated_at": "2024-07-20T00:00:00.000000Z"
//     },
//     {
//       "id": 51,
//       "message": "Van doan 2024-07-21",
//       "created_at": "2024-07-21T00:00:00.000000Z",
//       "updated_at": "2024-07-21T00:00:00.000000Z"
//     },
//     {
//       "id": 52,
//       "message": "Van doan 2024-07-22",
//       "created_at": "2024-07-22T00:00:00.000000Z",
//       "updated_at": "2024-07-22T00:00:00.000000Z"
//     },
//     {
//       "id": 53,
//       "message": "Van doan 2024-07-23",
//       "created_at": "2024-07-23T00:00:00.000000Z",
//       "updated_at": "2024-07-23T00:00:00.000000Z"
//     },
//     {
//       "id": 54,
//       "message": "Van doan 2024-07-24",
//       "created_at": "2024-07-24T00:00:00.000000Z",
//       "updated_at": "2024-07-24T00:00:00.000000Z"
//     },
//     {
//       "id": 55,
//       "message": "Van doan 2024-07-25",
//       "created_at": "2024-07-25T00:00:00.000000Z",
//       "updated_at": "2024-07-25T00:00:00.000000Z"
//     },
//     {
//       "id": 56,
//       "message": "Van doan 2024-07-26",
//       "created_at": "2024-07-26T00:00:00.000000Z",
//       "updated_at": "2024-07-26T00:00:00.000000Z"
//     },
//     {
//       "id": 57,
//       "message": "Van doan 2024-07-27",
//       "created_at": "2024-07-27T00:00:00.000000Z",
//       "updated_at": "2024-07-27T00:00:00.000000Z"
//     },
//     {
//       "id": 58,
//       "message": "Van doan 2024-07-28",
//       "created_at": "2024-07-28T00:00:00.000000Z",
//       "updated_at": "2024-07-28T00:00:00.000000Z"
//     },
//     {
//       "id": 59,
//       "message": "Van doan 2024-07-29",
//       "created_at": "2024-07-29T00:00:00.000000Z",
//       "updated_at": "2024-07-29T00:00:00.000000Z"
//     },
//     {
//       "id": 60,
//       "message": "Van doan 2024-07-30",
//       "created_at": "2024-07-30T00:00:00.000000Z",
//       "updated_at": "2024-07-30T00:00:00.000000Z"
//     },
//     {
//       "id": 61,
//       "message": "Van doan 2024-07-31",
//       "created_at": "2024-07-31T00:00:00.000000Z",
//       "updated_at": "2024-07-31T00:00:00.000000Z"
//     },
//     {
//       "id": 62,
//       "message": "Van doan 2024-08-01",
//       "created_at": "2024-08-01T00:00:00.000000Z",
//       "updated_at": "2024-08-01T00:00:00.000000Z"
//     },
//     {
//       "id": 63,
//       "message": "Van doan 2024-08-02",
//       "created_at": "2024-08-02T00:00:00.000000Z",
//       "updated_at": "2024-08-02T00:00:00.000000Z"
//     },
//     {
//       "id": 64,
//       "message": "Van doan 2024-08-03",
//       "created_at": "2024-08-03T00:00:00.000000Z",
//       "updated_at": "2024-08-03T00:00:00.000000Z"
//     }
//   ]