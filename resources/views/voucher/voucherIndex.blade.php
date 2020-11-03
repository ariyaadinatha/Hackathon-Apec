@extends('template.main')

@section('content')

@foreach($vouchers as $voucher)
<div class="#">
    <h4> <a href="/voucher/{{ $voucher->id }}"> {{ $voucher->name}} </a> </h4>
    Description : 
    <br>
</div>
@endforeach

@endsection