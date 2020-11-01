<?php

namespace App\Http\Controllers;

use App\Umkm;
use App\Rating;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function show(Umkm $umkm)
    {
        $crot = $umkm->id;
        $umkm = Umkm::find($crot);
        $ratings = Rating::where('umkm_id', $crot)
                            ->get();
        return view('umkm.umkmSingle', ['umkm' => $umkm,
                                        'ratings' => $ratings]);
    }

    public function viewIndex()
    {
        $umkms = Umkm::get();
        return view('umkm.umkmIndex', ['umkms' => $umkms]);
    }

    public function create()
    {
        return view('umkm.umkmCreate');
    }

    public function store(Request $request)
    {

        Umkm::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'rating' => $request->rating,
        ]);

        return redirect()->to('/umkm/');
    }
}
