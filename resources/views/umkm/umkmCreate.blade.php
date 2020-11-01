@extends('template.main')

<div class="container">
    <form action="/umkm/store" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="name" class="col-form-label"> Nama Umkm </label>
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
                    <label for="category" class="col-form-label"> Category </label>
                        <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" 
                        name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>
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
                    <label for="description" class="col-form-label"> description </label>
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
                    <label for="rating" class="col-form-label"> rating </label>
                        <input id="rating" type="text" class="form-control @error('rating') is-invalid @enderror" 
                        name="rating" value="{{ old('rating') }}" required autocomplete="rating" autofocus>
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
                    <button class="btn btn-primary"> Add Umkm </button>
                </div>
            </div>
        </div>

    </form>
</div>

