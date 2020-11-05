<?php

namespace App\Http\Controllers;

use App\Umkm;
use App\User;
use Auth;
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
        $star = Rating::where('umkm_id', $crot)->avg('star');
        $padded = sprintf('%0.2f', $star);
        return view('umkm.umkmSingle', ['umkm' => $umkm,
                                        'ratings' => $ratings,
                                        'padded' => $padded]);
    }

    public function viewIndex()
    {
        $ratings = Rating::get();
        $umkms = Umkm::get();
        return view('umkm.umkmIndex', ['umkms' => $umkms,
                                        'ratings' => $ratings]);
    }

    public function create()
    {
        return view('umkm.umkmCreate');
    }

    public function store(Request $request)
    {
        $image = request()->file('image');
        $imgname = request()->file('image')->getClientOriginalName();
        $imageUrl = $image->storeAs("img/umkms", "{$imgname}.{$image->extension()}");
        
        $userId = Auth::id();
        Umkm::create([
            'user_id' => $userId,
            'name' => $request->name,
            'location' => $request->location,
            'country' => $request->country,
            'description' => $request->description,
            'protocol' => $request->protocol,
            'gov_protocol' => $request->gov_protocol,
            'image' => $imageUrl,
        ]);

        return redirect()->to('/umkm/');
    }

    public function post(Request $request)
    {
        $id = Auth::id();
        
        Rating::create([
            'user_id' => $id,
            'umkm_id' => $request->umkm_id,
            'comment' => $request->comment,
            'star' => $request->star,
        ]);

        return back();
    }
}
