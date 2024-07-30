<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Track Your Order</title>
</head>


<div class="container">
    <!-- Barre de recherche -->
    <div class="search-form">
        <h1>Track Your Order</h1>
        @if(session('error'))
        <p class="error-message">{{ session('error') }}</p>
        @endif
        <form action="{{ route('tracker.search.submit') }}" method="POST">
            @csrf
            <input type="text" name="tracking_number" placeholder="Enter your tracking number" required>
            <button type="submit">Track</button>
        </form>
    </div>

    <!-- Affichage des détails de la commande -->


    @if(isset($registration))
    <div class="container">
        <div class="card">
            <div class="title">Purchase Receipt</div>
            <div class="info">
                <div class="row">
                    <div class="col-7">
                        <span id="heading">Date</span><br>
                        <span id="details">{{ $registration->created_at->format('d F Y') }}</span>
                    </div>
                    <div class="col-5 pull-right">
                        <span id="heading">Order No.</span><br>
                        <span id="details">{{ $registration->tracking_number }}</span><br>
                        <span id="details">{{ $registration->first_name}}</span>
                    </div>
                </div>
            </div>
            <div class="tracking">
                <div class="title">Tracking Order</div>
            </div>
            <div class="progress-track">
                <ul id="progressbar">
                    <li class="step0 {{ $registration->status == 'Ordered' ? 'active' : '' }}" id="step1">Ordered</li>
                    <li class="step0 {{ $registration->status == 'Shipped' ? 'active' : '' }} text-center" id="step2">Shipped</li>
                    <li class="step0 {{ $registration->status == 'On the way' ? 'active' : '' }} text-right" id="step3">On the way</li>
                    <li class="step0 {{ $registration->status == 'Delivered' ? 'active' : '' }} text-right" id="step4">Delivered</li>
                </ul>
            </div>
            <div class="footer">
                <div class="row">
                    <div class="col-2">
                        <img class="img-fluid" src="images/custom.jpg" alt="Footer Image">
                    </div>
                    <div class="col-10">
                        Want any help? Please &nbsp;<a href="#">contact us</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

</html>