@extends("template.main")

@section('content')
<form action="/voucher/buy" method=post enctype="multipart/form-data">
@csrf
    Name : {{$voucher->name}}
    <br> Desc : {{$voucher->description}}
    <br> price : {{$voucher->price}}
    <br>

    <input type="hidden" class="voucher_id" name="voucher_id" value="{{ $voucher->id }}" required autocomplete="voucher_id" autofocus>
    <button class="btn btn-primary"> buy </button>

</form>

@endsection

