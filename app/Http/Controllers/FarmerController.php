<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FarmerController extends Controller
{
    //

    public function getAllFarmers()
    {
       // $contributions = DB::table('farmers')->orderBy('created_at', 'desc')->get();
        $contributions=" data";

        $data = [
            'contributions' => $contributions,
        ];

        return view('dashboard.farmer_table')->with($data);
    }


}
