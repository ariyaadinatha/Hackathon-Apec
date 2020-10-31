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
}
