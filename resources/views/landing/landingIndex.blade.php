@extends("template.main")
<?php
use App\Rating;
?>
@section('content')

<div class="container-fluid hero d-flex">
  <div class="row">
        <div class="col-lg-6 d-flex flex-row-reverse">
            <div class="mr-3"> 
            <img src="/img/phone-picture.png" alt="" class="hp">
            </div>
        </div>

        <div class="col-lg-6 d-flex">
            <div class="align-self-center hero-text">
                <h1>Travel safer 
                    <br> than ever, 
                    <br> with Travée</h1>
                    <p>get up to date safety ratings or rate places you've been to based on their safety measures</p>
                    <input type="text" placeholder="search for destinations">
            </div>
        </div>
    </div>
</div>


<div class="main-1 pt-3">
        <div class="container">
            <h2>Places around you</h2>
            <div class="row">
                @foreach($umkms->take(4) as $umkm)
                <!-- abaikan pls -->
                <?php
                    $rating = Rating::where('umkm_id', $umkm->id)
                            ->avg('star');
                    $padded = sprintf('%0.2f', $rating);
                ?>
                <!-- abaikan pls -->
                <div class="col-lg-3 pb-2">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="/img/sample1.jpg" alt="Card image">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="mt-auto">
                                <h5 class="card-title"> <a href="/umkm/{{$umkm->id}}"> {{$umkm->name}} </a> </h5>
                                    <p class="card-text">Safety rating : {{$padded}} </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <h2>Best Safety ratings</h2>
            <div class="row">
                @foreach($umkms->take(4) as $umkm)
                <div class="col-lg-3 pb-2">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="/img/sample1.jpg" alt="Card image">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="mt-auto">
                                <h5 class="card-title"> {{$umkm->name}} </h5>
                                    <p class="card-text">Safety rating : 5</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
 
            <h2>Visit and rate these places to earn Travée-Points</h2>
            <div class="row">
                @foreach($umkms->take(4) as $umkm)
                <div class="col-lg-3 pb-2">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="/img/sample1.jpg" alt="Card image">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="mt-auto">
                                <h5 class="card-title"> {{$umkm->name}} </h5>
                                    <p class="card-text">Safety rating : 5</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <h2>Destination categories</h2>
            <div class="row">
                @foreach($umkms->take(4) as $umkm)
                <div class="col-lg-3 pb-2">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="/img/sample1.jpg" alt="Card image">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="mt-auto">
                                <h5 class="card-title"> {{$umkm->name}} </h5>
                                    <p class="card-text">Safety rating : 5</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</div>


@endsection