<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FarmerPaymentController extends Controller
{
    //
    // Show bank registration form
    public function paymentregistrationform($id)
    {

         // 1. Check if payment already exists for this farmer
            $existing = DB::table('farmer_payments')->where('farmer_id', $id)->first();

            if ($existing) {
                return redirect()->back()->with('error', 'Payment details for this farmer have already been registered.');
            }

        // Get farmer info
        $farmer = DB::table('farmers')->where('id', $id)->first();

        if (!$farmer) {
            return redirect()->back()->with('error', 'Farmer not found!');
        }


         $data = [
            'farmer' => $farmer,
        ];

        return view('dashboard.payment.paymentform')->with($data);
    }

    public function storePaymentDetails(Request $request)
    {
        $request->validate([
            'payment_type' => 'required|in:MPESA,BANK,BOTH',
        ]);

        // Validate based on type
        if ($request->payment_type == 'MPESA' || $request->payment_type == 'BOTH') {
            $request->validate([
                'mpesa_phone' => 'required|string',
            ]);
        }

        if ($request->payment_type == 'BANK' || $request->payment_type == 'BOTH') {
            $request->validate([
                'bank_name' => 'required|string',
                'bank_branch' => 'required|string',
                'account_name' => 'required|string',
                'account_number' => 'required|string',
            ]);
        }

        $id = $request->input('farmer_id');

        // Get farmer ID number automatically
        $farmer = DB::table('farmers')->where('id', $id)->first();

        DB::table('farmer_payments')->insert([
            'farmer_id'      => $id,
            'farmer_id_number' => $farmer->id_number, // auto fetched
            'payment_type'   => $request->payment_type,
            'mpesa_phone'    => $request->mpesa_phone,
            'bank_name'      => $request->bank_name,
            'bank_branch'    => $request->bank_branch,
            'account_name'   => $request->account_name,
            'account_number' => $request->account_number,
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);

        return redirect()->back()->with('success', 'Payment details saved successfully!');
    }
}
