<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function dashboard()
    {

        $contributions="";
        $totalFarmers = DB::table('farmers')->count();
        $maleFarmers = DB::table('farmers')->where('gender', 'Male')->count();
        $femaleFarmers = DB::table('farmers')->where('gender', 'Female')->count();
        $recentFarmers = DB::table('farmers')
                    ->whereDate('created_at', '>=', now()->subMonth())
                    ->count();


        $data=[
            'contributions' => $contributions,
            'totalFarmers' => $totalFarmers,
            'maleFarmers' => $maleFarmers,
            'femaleFarmers' => $femaleFarmers,
            'recentFarmers' => $recentFarmers,
            

        ];

        return view('dashboard.dashboard')->with($data);

    }

    public function table()
    {

        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('dashboard.table')->with($data);

    }
}
