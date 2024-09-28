@extends('components.PageLayout')
@section('content')
    <form action={{ route('filterCars') }} method="POST">
        @csrf
        <ol class="breadcrumb my-3 py-3 d-flex justify-content-between align-items-center">
            <li class="breadcrumb-item active">
                <div class="d-flex gap-5 align-items-center">
                    <select class="form-select form-select-sm" name="car_type">
                        <option value="">Select Car Type</option>
                        @foreach ($carsType as $carType)
                            <option value="{{ $carType->car_type }}">{{ $carType->car_type }}</option>
                        @endforeach
                    </select>
                    <select class="form-select form-select-sm" name="brand">
                        <option value="">Select Car Brand</option>
                        @foreach ($carsBrand as $carBrand)
                            <option value="{{ $carBrand->brand }}">{{ $carBrand->brand }}</option>
                        @endforeach
                    </select>
                    <input type="text" class="form-control form-control-sm" name="daily_rent_price"
                        placeholder="Daily rent price" autocomplete="off">
                </div>
            </li>
            <button type="submit" class="btn btn-sm btn-info">Filter</button>
        </ol>
    </form>

    <div class="row">
        @foreach ($cars as $car)
            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="card">
                    @if (!$car->image)
                        <img src="{{ asset('assets/image/no-image.png') }}" class="img-fluid" alt="...">
                    @else
                        <img src="{{ $car->image }}" class="img-fluid" alt="...">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->name }}</h5>
                        <p class="card-text">Brand: {{ $car->brand }}</p>
                        <p class="card-text">Model: {{ $car->model }}</p>
                        <p class="card-text">Year of Manufacture: {{ $car->year }}</p>
                        <p class="card-text">Car Type: {{ $car->car_type }}</p>
                        <p class="card-text">Daily Rent Price: {{ $car->daily_rent_price }}</p>
                        <p class="card-text">Availability Status:
                            @if ($car->availability == 1)
                                <span class="badge bg-success">Available</span>
                            @else
                                <span class="badge bg-warning text-dark">Not Available</span>
                            @endif
                        </p>
                        <a href={{ route('frontend.cars.show', $car->id) }} class="btn w-100 btn-primary">Book</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
