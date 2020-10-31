@extends('template.main')

@section('content')


<h2> All Umkm </h2>

@foreach($umkms as $umkm)
<div class="#">
    <h4> <a href="/umkm/{{ $umkm->name }}"> {{ $umkm->name}} </a> </h4>
    Category : {{ $umkm->category->name }}
    <br> Description : {{ $umkm->description}}
    <br>
</div>
@endforeach