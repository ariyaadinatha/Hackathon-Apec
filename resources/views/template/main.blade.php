<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/crot.css">
    <title>Travee</title>
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
    @yield('content')
</body>



</html>
