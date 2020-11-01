<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    
    public $incrementing = false;
    public function show(Rating $rating)
    {        
        return view('rating.ratingIndex', compact('rating'));
    }

    public function viewRating(Rating $rating)
    {
        $ratings = Rating::where('umkm_id', $rating->umkm_id)
                    ->get();
        return view('rating.ratingIndex', ['ratings' => $ratings]);
    }
}
