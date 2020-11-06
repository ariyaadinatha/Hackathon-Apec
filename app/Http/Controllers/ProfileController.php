<?php

namespace App\Http\Controllers;
use App\User;
use App\Coupon;
use App\Voucher;
use Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        $coupons = Coupon::where('user_id', $user->id)
                    ->get();
        return view('profile.profileSingle', [
            'user' => $user,
            'coupons' => $coupons,
        ]);
    }
}
