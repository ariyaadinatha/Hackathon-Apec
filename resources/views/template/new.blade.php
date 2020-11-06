<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('css')
    <title>Travee</title>
</head>

<div class="container">
        <header>
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

<body>
  @yield('content')
</body>