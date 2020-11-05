@extends('template.main')
<?php
use App\Rating;
?>
@section('content')


<div class="main-1 pt-3">
<div class="container">
<h2> All Destination </h2>
<div class="row">


@foreach($umkms as $umkm)

<!-- Anggap ga ada -->
<?php
$rating = Rating::where('umkm_id', $umkm->id)
        ->avg('star');
$padded = sprintf('%0.2f', $rating);
?>
<!-- Anggap ga ada -->

<div class="col-sm-4 pt-3">
    <div class="card bg-dark text-white">
        <img class="card-img" src="/img/sample1.jpg" alt="Card image">
        <div class="card-img-overlay">
            <h5 class="card-title"> {{$umkm->name}} </h5>
            <p class="card-text">Safety rating : {{$padded}}</p>
        </div>
    </div>
</div>
       
@endforeach
</div>
</div>
</div>

@endsection