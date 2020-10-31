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
        $umkm = new Umkm;
        $umkm->name = $request->name;
        $umkm->category = $request->category;
        $umkm->description = $request->description;
        $umkm->rating = $request->rating;
        $umkm->save();

        return redirect()->to('/umkm/');
    }
}
