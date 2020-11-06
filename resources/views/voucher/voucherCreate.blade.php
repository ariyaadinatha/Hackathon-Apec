@extends('template.main')

@section('content')
<div class="container">
    <form action="/voucher/store" enctype="multipart/form-data" method="post" >
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="name" class="col-form-label"> Voucher Name </label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="description" class="col-form-label"> Description </label>
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" 
                        name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="price" class="col-form-label"> Price </label>
                        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" 
                        name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>
            </div>
        </div>


        <div>
            <div class="row pt-3">
                <div class="col-8 offset-2">
                    <button class="btn btn-primary"> Create Voucher </button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
