<div class="#">
    <h4> <a href="/umkm/{{ $umkm->name }}"> {{ $umkm->name}} </a> </h4>
    Category : {{ $umkm->category->name }}
    <br> Description : {{ $umkm->description}}
    <br> Owner : {{ $umkm->user->name}}
    <br> <br>
    
</div>


<br>
<a href="/rating/{{$umkm->id}}"> View rating </a>

@foreach($ratings as $rating)
<div class="#">

    {{$rating}}
</div>

<br>
<br>
@endforeach

<br>


<div class="container">
    <form action="/umkm/{{ $umkm->name }}/store" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="description" class="col-form-label"> comment </label>
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



