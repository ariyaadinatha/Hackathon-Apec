<?php

namespace App\Http\Controllers;
use App\Voucher;

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
        $voucher = Voucher::find($voucher);
        return view('voucher.voucherSingle', ['voucher' => $voucher]);
    }

}
