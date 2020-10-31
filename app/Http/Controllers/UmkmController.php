<?php

namespace App\Http\Controllers;

use App\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function show($name)
    {
        $umkm = Umkm::where('name', $name)->firstOrFail();
        return view('umkm.umkmIndex', compact('umkm'));
    }
}
