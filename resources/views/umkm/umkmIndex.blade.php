@extends('template.main')

@section('content')
@foreach($umkms as $umkm)
<div class="#">
    <h4> <a href="/umkm/{{ $umkm->id }}"> {{ $umkm->name}} </a> </h4>
    <!-- Category : </a> -->
    <br> Description : {{ $umkm->description}}
    <br> Owner : 
</div>
@endforeach

@endsection