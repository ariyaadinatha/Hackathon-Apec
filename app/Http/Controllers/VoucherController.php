<?php

namespace App\Http\Controllers;
use App\Voucher;
use App\Coupon;
use App\User;
use Auth;

use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function viewIndex()
    {
        $user = Auth::id();
        $saldo = User::where('id', $user)
                    ->get();
        $vouchers = Voucher::get();
        return view('voucher.voucherIndex', ['vouchers' => $vouchers,
                                            'saldo' => $saldo]);
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

    public function create()
    {
        return view('voucher.voucherCreate');
    }

    public function store(Request $request)
    {        
        Voucher::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->to('/voucher/');
    }

}
