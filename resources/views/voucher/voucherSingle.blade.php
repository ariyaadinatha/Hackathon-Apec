@extends("template.main")

@section('content')
@foreach($voucher as $voucher)
    Name : {{$voucher->name}}
    <br>
@endforeach
@endsection

