<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $umkms = $category->umkms;
        return view('umkm.umkmIndex', compact('umkms'));
    }
}
