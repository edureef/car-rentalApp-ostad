@extends('components.PageLayout')
@section('content')
    <div class="row d-flex justify-content-between align-items-center">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="text-center">
                <h3>About Us</h3>
                <p class="my-3 p-4">we believe that travel should be seamless, enjoyable, and affordable. Whether you’re
                    exploring a new
                    city, planning a road trip, or need a vehicle for a special occasion, we’re here to provide you with
                    the perfect ride.</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <div>
                <img class="img-fluid rounded my-4" height="500" src="{{ asset('assets/image/rentACar.jpg') }}"
                    alt="">
            </div>
        </div>
    </div>
@endsection
