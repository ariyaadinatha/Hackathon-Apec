@extends("template.new")

@section('css')
<link rel="stylesheet" href="/css/style.css">
@endsection

@section('content')





<form action="/voucher/buy" method=post enctype="multipart/form-data">
@csrf
<div class="container">
        <div class="buy-voucher">
            <h1>/{{$voucher->name}}/</h1>
            <h3>{{$voucher->description}}</h3>
            <h4>{{$voucher->price}}</h4>
            <input type="hidden" class="voucher_id" name="voucher_id" value="{{ $voucher->id }}" required autocomplete="voucher_id" autofocus>
            <button>Buy this voucher</button>
        </div>
    </div>

</form>

@endsection