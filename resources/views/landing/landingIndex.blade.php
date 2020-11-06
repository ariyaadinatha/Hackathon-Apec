<?php
use App\Rating;
?>
@extends('template.new')

@section('css')
<link rel="stylesheet" href="/css/style.css">
@endsection

@section('content')
    <div class="hero">
        <div class="container">

            <div class="left-hero">
                <img src="/img/phone-picture.png" alt="">
            </div>
            <div class="right-hero">
                <h1>Travel safer than ever, with Travée</h1>
                <p>get up to date safety ratings or rate places you've been to based on their safety measures</p>
                <input type="text" placeholder="search for destinations">
            </div>

        </div>
    </div>

    <div class="main-1">
        <div class="container">
            <div class="main-scroll">
                <h2>Places around you</h2>
                <div class="items-container">


                @foreach($umkms->take(4) as $umkm)
                <!-- abaikan pls -->
                <?php
                    $rating = Rating::where('umkm_id', $umkm->id)
                            ->avg('star');
                    $padded = sprintf('%0.2f', $rating);
                ?>

                    <div class="item" style="background: url('/{{$umkm->image}}'); height:100px; width:300px; background-size:100%; ">
                        <div class="item-text">
                            <a href="/umkm/{{$umkm->id}}" class="">{{$umkm->name}}</a>
                            <p>Safety rating : {{$padded}}</p>
                        </div>
                    </div>


                @endforeach


                </div>
            </div>
            <div class="main-scroll">
                <h2>Best Safety ratings</h2>
                <div class="items-container">



                @foreach($umkms->take(4) as $umkm)
                <!-- abaikan pls -->
                <?php
                    $rating = Rating::where('umkm_id', $umkm->id)
                            ->avg('star');
                    $padded = sprintf('%0.2f', $rating);
                ?>

<div class="item" style="background: url('/{{$umkm->image}}'); height:100px; width:300px; background-size:100%; ">
                        <div class="item-text">
                            <a href="/umkm/{{$umkm->id}}" class="">{{$umkm->name}}</a>
                            <p>Safety rating : {{$padded}}</p>
                        </div>
                    </div>


                @endforeach



                </div>
            </div>

        </div>
    </div>


    <div class="main-2">
        <div class="container">
            <div class="main-scroll">
                <h2>Visit and rate these places to earn Travée-Points</h2>
                <div class="items-container">



                @foreach($umkms->take(4) as $umkm)
                <!-- abaikan pls -->
                <?php
                    $rating = Rating::where('umkm_id', $umkm->id)
                            ->avg('star');
                    $padded = sprintf('%0.2f', $rating);
                ?>

<div class="item" style="background: url('/{{$umkm->image}}'); height:100px; width:300px; background-size:100%; ">
                        <div class="item-text">
                            <a href="/umkm/{{$umkm->id}}" class="">{{$umkm->name}}</a>
                            <p>Safety rating : {{$padded}}</p>
                        </div>
                    </div>


                @endforeach



                </div>
            </div>

            <div class="main-scroll">
                <h2>Destination categories</h2>
                <div class="items-container">
                    <div class="item">
                        
                        <div class="item-text">
                            <a href="#" class="">Pura Tanah Lot</a>
                            <p>Safety rating : 5</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-text">
                            <a href="#" class="">Pura Tanah Lot</a>
                            <p>Safety rating : 5</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-text">
                            <a href="#" class="">Pura Tanah Lot</a>
                            <p>Safety rating : 5</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-text">
                            <a href="#" class="">Pura Tanah Lot</a>
                            <p>Safety rating : 5</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-text">
                            <a href="#" class="">Pura Tanah Lot</a>
                            <p>Safety rating : 5</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
