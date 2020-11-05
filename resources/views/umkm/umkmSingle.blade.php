<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand ml-3" href="/landing/"> <i> Travée </i> </a>

  <div class="collapse navbar-collapse" id="navbarNav">

  </div>
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/landing/"> <i> Explore </i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/voucher/"> <i> Voucher </i></a>
      </li>
      <li class="nav-item">
        @if(Auth::check())
          <a class="nav-link" href="/profile/{{Auth::user()->id}}"> <i> {{Auth::user()->name}} </i> </a>
        @else
          <a class="nav-link" href="/login/"> <i> Login </i> </a>
        @endif
      </li>
    </ul>
</nav>


<body>
    <section class="umkm-detail-title">
        <article class="container">
            <h1 class="title"> {{ $umkm->name}} </h1>
            <div class="detail">
                <div class="desc">
                {{ $umkm->description}}
                </div>
            </div>
            <div class="location">
                Location : {{$umkm->location}}, {{$umkm->country}}
            </div>
        </article>
    </section>

    <section class="review-info container">
        <div class="info">
            Information on <span class="underlined">safety gudelines </span> and <span class="underlined">reviews</span>
            listed below
        </div>
        <img src="/img/button-down.png" alt="">
    </section>

    <section class="prot container">
        <h3>Health & Safety Protocols</h3>
        <section class="health">
            <article>
                <h4>Goverment Protocols</h4>
                <ul>
                    <p> {{$umkm->gov_protocol}} </p>
                </ul>
            </article>
            <article>
                <h4>Local Administration Protocols</h4>
                <ul>
                    <p> {{$umkm->protocol}} </p>
                </ul>
            </article>
        </section>
    </section>

    <section class="user-review container">
        <div class="write-review">
            <form action="/umkm/post" enctype="multipart/form-data" method="post">
            @csrf

                @if ($ratings->count()>0)
                    <h2>Safety Reviews (Overall {{$padded}} stars)</h2>
                @else
                    <h2>Safety Reviews (No review)</h2>
                @endif
                <h3>Give your safety rating here</h3>

                <input type="text" class="review" placeholder="review..." name="comment" value="{{ old('comment') }}" required autocomplete="comment" autofocus>
                <input type="hidden" class="review" placeholder="review..." name="umkm_id" value="{{$umkm->id}}" required autocomplete="umkm_id" autofocus>
                <div class="write-review-bottom">
                    <input type="text" class="rating" placeholder="1 - 5 stars" name="star" value="{{ old('star') }}" required autocomplete="star" autofocus>
                    <button>Submit</button>
                </div>
            </form>
        </div>

        <div class="top-review">
            <ul>
            @foreach($ratings as $rating)
                <li>
                    <h3> {{$rating->user->name}} </h3>
                    <p>"{{$rating->comment}}"
                    </p>
                    <div class="rating-score">
                        <?php
                            echo str_repeat("★", $rating->star);
                        ?>
                    </div>
                </li>
            @endforeach
            </ul>
        </div>
    </section>
</body>