@extends('template.main')

@section('content')
<div class="main-1 pt-3">
        <div class="container">
            <div class="hero p-3 m-3">
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
                    </div>
                </div>
        

            </div>
        </div>

        <div class="container pt-5">
            <div class="bgleaf p-3">
                <h1> My Reviews </h1>
            </div>
            <!-- loop mulai dari sini -->
            <h3> Jancok </h3>
                <div class="ml-4">
                    <p class="#"> "Kontol kontol kontol" </p>
                    <p> ****** </p>
                    
                </div>
            <!-- end loop -->
                <a href="#"> See all my review </a>

            <div class="pt-3">
                <div class="bgleaf p-3">
                    <h1> My Voucher </h1>
                </div>

                <div class="row pb-3">

                     <!-- loop mulai dari sini -->
                    <div class="col-sm-4 pt-3">
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="/img/sample1.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="card-title">  </h5>
                                <p class="card-text">Safety rating : </p>
                            </div>
                        </div>
                    </div>
                    <!-- end loop -->

                    <div class="col-sm-4 pt-3">
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="/img/sample1.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="card-title">  </h5>
                                <p class="card-text">Safety rating : </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 pt-3">
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="/img/sample1.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="card-title">  </h5>
                                <p class="card-text">Safety rating : </p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>

</div>


@endsection