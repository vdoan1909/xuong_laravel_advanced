<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function index()
    {
        $data = Rating::get();
        dd($data->first()->rateable);
    }
}
