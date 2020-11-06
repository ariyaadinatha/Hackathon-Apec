@extends('template.new')

@section('css')
<link rel="stylesheet" href="/css/style.css">
@endsection

@section('content')
    
    <div class="voucher-title">
        <div class="container">
            <h1>/Vouchers/</h1>
        </div>
    </div>

    <div class="voucher-text">
        <div class="container">
            <div class="voucher-text-container">
                <h2>Earn <span>Travée Points</span> by visiting and rating places, Unlock <span>vouchers</span> &
                    rewards
                    in return for Travée Points.</h2>
            </div>
        </div>
    </div>

    <div class="voucher-list container">
        <h2>Available Vouchers (My Travée-Balance: {{$saldo->first()->saldo}} Points)</h2>
        <div class="voucher-grid">
            @foreach($vouchers as $voucher)
            <div class="voucher-item">
                <h3>{{ $voucher->name}}</h3>
                <h4>{{ $voucher->description}}</h4>
                <p>{{ $voucher->price}} Travée-Points</p>
  
                <a href="/voucher/{{$voucher->id}}"> <button>Retrieve Now</button> </a>
            </div>
            @endforeach



        </div>

    </div>
@endsection


