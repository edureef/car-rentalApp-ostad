@extends('components.PageLayout')
@section('content')
    @if (auth()->user()->isCustomer())
        @include('frontend.cars.index')
    @else
        <ol class="breadcrumb my-3">
            <li class="breadcrumb-item active">Dashbord</li>
        </ol>

        <div class="row">
            <div class="col-12 col-lg-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Total Cars</h5>
                        </div>
                        <div>
                            <span>{{ $totalCars }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Total Available Cars</h5>
                        </div>
                        <div>
                            <span>{{ $availableCars }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Total number of rentals</h5>
                        </div>
                        <div>
                            <span>{{ $totalRentals }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Total rentals earnings</h5>
                        </div>
                        <div>
                            <span>{{ $totalRentalsEarnings }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
