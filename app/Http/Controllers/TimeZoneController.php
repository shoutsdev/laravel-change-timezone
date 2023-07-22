<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class TimeZoneController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $time = Carbon::createFromFormat('Y-m-d H:i:s', '2023-05-23 05:01:01')->tz("Asia/Dhaka");

        dd($time);
    }
}
