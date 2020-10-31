<?php

namespace App\Http\Controllers;

use App\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function show(Umkm $umkm)
    {
        return view('umkm.umkmSingle', compact('umkm'));
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
