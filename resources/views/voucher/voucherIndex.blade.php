@extends('template.main')

@section('content')

@foreach($vouchers as $voucher)
<div class="#">
    <h4> <a href="/voucher/{{ $voucher->name }}"> {{ $voucher->name}} </a> </h4>
    <br> Description : 
</div>
@endforeach

@endsection