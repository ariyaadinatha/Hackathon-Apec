@extends('template.main')
<?php
use App\Rating;
?>
@section('content')
@foreach($umkms as $umkm)

<?php
$rating = Rating::where('umkm_id', $umkm->id)
        ->avg('star');
$padded = sprintf('%0.2f', $rating);
?>

<div class="main-1">
     <div class="container">
         <div class="main-scroll">
             <h2>Places around you</h2>
             <div class="items-container">
                 <div class="item">
                     <div class="item-text">
                         <a href="/umkm/{{ $umkm->id }}" class="">{{ $umkm->name }}</a>
                         <p>Safety rating : {{$padded}} </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
@endforeach

@endsection