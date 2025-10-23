<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function dashboard()
    {

        $contributions="";

        $data=[
            'contributions' => $contributions,
            

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
