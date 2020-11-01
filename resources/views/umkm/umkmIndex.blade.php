@extends('template.main')


<h2> All Umkm </h2>

@foreach($umkms as $umkm)
<div class="#">
    <h4> <a href="/umkm/{{ $umkm->name }}"> {{ $umkm->name}} </a> </h4>
    Category : <a href=/categories/{{$umkm->category->name}}> {{$umkm->category->name}} </a>
    <br> Description : {{ $umkm->description}}
    <br> Owner : 
</div>
@endforeach