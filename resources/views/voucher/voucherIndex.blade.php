@extends('template.main')

@section('content')
<div class="main-1 pt-3">
<div class="container">

<div class="row">

@foreach($vouchers as $voucher)

<div class="col-sm-4 pt-3 pb-2">
    <div class="card bg-dark text-white">
        <img class="card-img" src="/img/sample1.jpg" alt="Card image">
        <div class="card-img-overlay">
            <h5 class="card-title"> {{ $voucher->name}} </h5>
            <p class="card-text"> {{ $voucher->description}} </p>
        </div>
    </div>
</div>

@endforeach
</div>
</div>
</div>
@endsection




