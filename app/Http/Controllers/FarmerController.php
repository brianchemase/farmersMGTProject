<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FarmerController extends Controller
{
    //

    public function getAllFarmers()
    {
        $farmers = DB::table('farmers')->orderBy('created_at', 'desc')->get();
        $contributions=" data";

        $data = [
            'contributions' => $contributions,
            'farmers' => $farmers,
        ];

        return view('dashboard.farmer_table')->with($data);
    }




     public function farmersregister()
    {
          $contributions=" data";

                        $counties = [
                        '001' => 'Mombasa',
                        '002' => 'Kwale',
                        '003' => 'Kilifi',
                        '004' => 'Tana River',
                        '005' => 'Lamu',
                        '006' => 'Taita Taveta',
                        '007' => 'Garissa',
                        '008' => 'Wajir',
                        '009' => 'Mandera',
                        '010' => 'Marsabit',
                        '011' => 'Isiolo',
                        '012' => 'Meru',
                        '013' => 'Tharaka-Nithi',
                        '014' => 'Embu',
                        '015' => 'Kitui',
                        '016' => 'Machakos',
                        '017' => 'Makueni',
                        '018' => 'Nyandarua',
                        '019' => 'Nyeri',
                        '020' => 'Kirinyaga',
                        '021' => 'Murang\'a',
                        '022' => 'Kiambu',
                        '023' => 'Turkana',
                        '024' => 'West Pokot',
                        '025' => 'Samburu',
                        '026' => 'Trans Nzoia',
                        '027' => 'Uasin Gishu',
                        '028' => 'Elgeyo Marakwet',
                        '029' => 'Nandi',
                        '030' => 'Baringo',
                        '031' => 'Laikipia',
                        '032' => 'Nakuru',
                        '033' => 'Narok',
                        '034' => 'Kajiado',
                        '035' => 'Kericho',
                        '036' => 'Bomet',
                        '037' => 'Kakamega',
                        '038' => 'Vihiga',
                        '039' => 'Bungoma',
                        '040' => 'Busia',
                        '041' => 'Siaya',
                        '042' => 'Kisumu',
                        '043' => 'Homa Bay',
                        '044' => 'Migori',
                        '045' => 'Kisii',
                        '046' => 'Nyamira',
                        '047' => 'Nairobi'
                    ];

        $data = [
            'contributions' => $contributions,
            'counties' => $counties,
        ];

        return view('dashboard.farmerRegistration')->with($data);
    }


    public function savefarmer (Request $request)
    {

        $validated = $request->validate([
            'id_number' => 'required|string|max:20|unique:farmers,id_number',
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'location' => 'required|string|max:255',
            'dateofbirth' => 'required|date',
            'county' => 'required|string|max:255',
            'primary_phone' => 'required|string|max:15',
            'secondary_phone' => 'nullable|string|max:15',
        ]);

        DB::table('farmers')->insert([
            'id_number' => $validated['id_number'],
            'name' => $validated['name'],
            'gender' => $validated['gender'],
            'location' => $validated['location'],
            'dateofbirth' => $validated['dateofbirth'],
            'county' => $validated['county'],
            'primary_phone' => $validated['primary_phone'],
            'secondary_phone' => $validated['secondary_phone'] ?? null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Farmer Bio Data registered successfully!');
    }


    public function editfarmer($id)
    {
        // Fetch the farmer from the database using DB facade
        $farmer = DB::table('farmers')->where('id', $id)->first();

        // Fetch counties (code + name)
        $counties = [
            '001' => 'Mombasa',
            '002' => 'Kwale',
            '003' => 'Kilifi',
            '004' => 'Tana River',
            '005' => 'Lamu',
            '006' => 'Taita-Taveta',
            '007' => 'Garissa',
            '008' => 'Wajir',
            '009' => 'Mandera',
            '010' => 'Marsabit',
            '011' => 'Isiolo',
            '012' => 'Meru',
            '013' => 'Tharaka-Nithi',
            '014' => 'Embu',
            '015' => 'Kitui',
            '016' => 'Machakos',
            '017' => 'Makueni',
            '018' => 'Nyandarua',
            '019' => 'Nyeri',
            '020' => 'Kirinyaga',
            '021' => 'Murang’a',
            '022' => 'Kiambu',
            '023' => 'Turkana',
            '024' => 'West Pokot',
            '025' => 'Samburu',
            '026' => 'Trans Nzoia',
            '027' => 'Uasin Gishu',
            '028' => 'Elgeyo-Marakwet',
            '029' => 'Nandi',
            '030' => 'Baringo',
            '031' => 'Laikipia',
            '032' => 'Nakuru',
            '033' => 'Narok',
            '034' => 'Kajiado',
            '035' => 'Kericho',
            '036' => 'Bomet',
            '037' => 'Kakamega',
            '038' => 'Vihiga',
            '039' => 'Bungoma',
            '040' => 'Busia',
            '041' => 'Siaya',
            '042' => 'Kisumu',
            '043' => 'Homa Bay',
            '044' => 'Migori',
            '045' => 'Kisii',
            '046' => 'Nyamira',
            '047' => 'Nairobi City',
        ];

        return view('dashboard.farmerRegistrationUpdate', compact('farmer', 'counties'));
    }


    public function updatefarmer(Request $request, $id)
        {
            $validated = $request->validate([
                'id_number' => 'required|string|max:20',
                'name' => 'required|string|max:255',
                'gender' => 'required|string',
                'location' => 'required|string|max:255',
                'dateofbirth' => 'required|date',
                'county' => 'required|string|max:255',
                'primary_phone' => 'required|string|max:15',
                'secondary_phone' => 'nullable|string|max:15',
            ]);

            DB::table('farmers')->where('id', $id)->update([
                'id_number' => $validated['id_number'],
                'name' => $validated['name'],
                'gender' => $validated['gender'],
                'location' => $validated['location'],
                'dateofbirth' => $validated['dateofbirth'],
                'county' => $validated['county'],
                'primary_phone' => $validated['primary_phone'],
                'secondary_phone' => $validated['secondary_phone'] ?? null,
                'updated_at' => now(),
            ]);

            return redirect()->route('farmers.edit', $id)->with('success', 'Farmer details updated successfully!');
        }


}
