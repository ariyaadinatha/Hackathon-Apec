<?php
use App\Voucher;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styleProfile.css">
    <link rel="stylesheet" href="/css/crot.css">
    <title>Travee</title>
</head>

<div class="pcontainer">
        <header style="text-decoration :none;">
            <div class="logo">
                <a href="/landing">Travée</a>
            </div>
            <nav>
                <ul>
                    <li><a href="/landing/">Explore</a></li>
                    
                    <li><a href="/voucher/">Vouchers</a></li>
                    @if(Auth::check())
                       <li> <a class="#" href="/profile/{{Auth::user()->id}}"> {{Auth::user()->name}} </a> </li>
                    @else
                        <li><a href="/login">Login</a></li>
                    @endif
                </ul>
            </nav>
        </header>
</div>




<div class="main-1 pt-3">
        <div class="container">
            <div class="heroprofile p-3 m-3">
                <h1>My Profile</h1>
            </div>
            <div class="row">

                <div class="col-lg-6 centerItem">
                    <div class="#">
                        <b>Username</b>
                        <div class="#">
                            <input type="text" value="{{$user->name}}">
                        </div>
                        <b>Name</b>
                        <div class="#">
                            <input type="text" value="{{$user->name}}">
                        </div>
                        <b>Email Address</b>
                        <div class="#">
                            <input type="text" value="{{$user->email}}">
                        </div>
                        <a href="/umkm/create">
                            <button type="button" class="btn btn-primary mt-3">Register my Business</button>
                        </a>
                    </div>
                </div>
                


                <div class="col-lg-6 centerItem">
                    <div class="#">
                        <b>Country</b>
                        <div class="#">
                            <input type="text" value="{{$user->country}}">
                        </div>
                        <b>City</b>
                        <div class="#">
                            <input type="text" value="{{$user->city}}">
                        </div>
                        <b>Address</b>
                        <div class="#">
                            <input type="text" value="{{$user->address}}">
                        </div>
                        <a href="/voucher/create">
                            <button type="button" class="btn btn-primary mt-3">Create voucher</button>
                        </a>
                    </div>
                </div>

                
        

            </div>
        </div>

        <div class="container pt-5">
            <!--  <div class="bgleaf p-3">
                <h1> My Reviews </h1>
            </div>
            loop mulai dari sini 
            <h3> Jancok </h3>
                <div class="ml-4">
                    <p class="#"> "Kontol kontol kontol" </p>
                    <p> ****** </p>
                    
                </div> -->
            <!-- end loop 
                <a href="#"> See all my review </a>-->

            <div class="pt-3">
                <div class="bgleaf p-3">
                    <h1> My Voucher </h1>
                </div>

                <div class="row pb-3">

                     <!-- loop mulai dari sini -->

                     @foreach($coupons as $coupon)
                     <?php
                         $voucher = Voucher::where('id', $coupon->voucher_id)
                                            ->first();
                    ?>

                    <div class="card m-3" style="width: 18rem; background-color:#ffefcc;">
                      <div class="card-body">
                        <h5 class="card-title">{{$voucher->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$voucher->description}}</h6>
                      </div>
                    </div>

                    @endforeach
                    <!-- end loop -->




                </div>
            </div>
        </div>

</div>




</body>



</html>