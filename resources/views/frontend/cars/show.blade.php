@extends('components.PageLayout')
@section('content')
    <div class="card" style="width: 18rem;">
        @if (!$car->image)
            <img src="{{ asset('assets/image/no-image.png') }}" class="img-fluid" alt="...">
        @else
            <img src="{{ asset($car->image) }}" class="img-fluid" alt="...">
        @endif
        <div class="card-body">
            <form action={{ route('frontend.cars.book') }} method="post">
                @csrf
                <input type="hidden" name="car_id" value="{{ $car->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="total_cost" value="{{ $car->daily_rent_price }}">
                <div class="mb-3">
                    <label for="rentalStartDate" class="form-label">Rental Start Date</label>
                    <input type="date" name="start_date" class="form-control form-control-sm" id="rentalStartDate">
                    @error('start_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="rentalEndDate" class="form-label">Rental End Date</label>
                    <input type="date" name="end_date" class="form-control form-control-sm" id="rentalEndDate">
                    @error('end_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="my-2">
                    @if (session('error'))
                        <div class="text-danger">{{ session('error') }}</div>
                    @endif
                </div>
                <button type="submit" class="btn w-100 btn-primary">Make a Book</button>
            </form>
        </div>
    </div>
@endsection
