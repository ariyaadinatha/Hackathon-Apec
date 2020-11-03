<?php

namespace App\Http\Controllers;
use App\Voucher;
use App\Coupon;
use Auth;

use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function viewIndex()
    {
        $vouchers = Voucher::get();
        return view('voucher.voucherIndex', ['vouchers' => $vouchers]);
    }

    public function show(Voucher $voucher)
    {
        $crot = $voucher->id;
        $voucher = Voucher::find($crot);
        return view('voucher.voucherSingle', ['voucher' => $voucher]);
    }

    public function buy(Request $request)
    {
        $user = Auth::id();
        Coupon::create([
            'user_id' => Auth::id(),
            'voucher_id' => $request->voucher_id,
        ]);

        return back();
    }

}
