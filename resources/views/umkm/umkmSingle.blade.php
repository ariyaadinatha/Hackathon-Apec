@extends('template.main')

<div class="#">
    <h4> <a href="/umkm/{{ $umkm->name }}"> {{ $umkm->name}} </a> </h4>
    Category : {{ $umkm->category->name }}
    <br> Description : {{ $umkm->description}}
    <br> Owner : {{ $umkm->user->name}}
    <br> <br>
    
</div>


<br>
<!-- <a href="/rating/{{$umkm->id}}"> View rating </a> -->

@foreach($ratings as $rating)
<div class="#">

    <br> name : {{$rating->user->name}}
    <br> comment : {{$rating->comment}}
    <br> rating : {{$rating->star}}
</div>

<br>
<br>
@endforeach

<br>


<div class="container">
    <form action="/umkm/post" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="comment" class="col-form-label"> comment </label>
                        <input id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" 
                        name="comment" value="{{ old('comment') }}" required autocomplete="comment" autofocus>
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
                    <label for="star" class="col-form-label"> rating </label>
                        <input id="star" type="text" class="form-control @error('star') is-invalid @enderror" 
                        name="star" value="{{ old('star') }}" required autocomplete="star" autofocus>
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
                    <button class="btn btn-primary"> Post </button>
                </div>
            </div>
        </div>

    </form>
</div>



