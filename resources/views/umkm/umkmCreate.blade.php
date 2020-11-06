@extends('template.main')

@section('content')
<div class="container">
    <form action="/umkm/store" enctype="multipart/form-data" method="post" >
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="name" class="col-form-label"> Bussiness Name </label>
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
                    <label for="location" class="col-form-label"> Location </label>
                        <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" 
                        name="location" value="{{ old('location') }}" required autocomplete="location" autofocus>
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
                    <label for="country" class="col-form-label"> Country </label>
                        <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" 
                        name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>
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
                    <label for="protocol" class="col-form-label"> Local Protocol </label>
                        <input id="protocol" type="text" class="form-control @error('protocol') is-invalid @enderror" 
                        name="protocol" value="{{ old('protocol') }}" required autocomplete="protocol" autofocus>
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
                    <label for="gov_protocol" class="col-form-label"> Goverment Protocol </label>
                        <input id="gov_protocol" type="text" class="form-control @error('gov_protocol') is-invalid @enderror" 
                        name="gov_protocol" value="{{ old('gov_protocol') }}" required autocomplete="gov_protocol" autofocus>
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
                    <label for="image" class="col-form-label"> Image </label>
                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" 
                        name="image" required autocomplete="image" autofocus>
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
                    <button class="btn btn-primary"> Create Bussiness </button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
