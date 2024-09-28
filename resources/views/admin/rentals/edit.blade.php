@extends('components.PageLayout')
@section('content')
    <ol class="breadcrumb my-3">
        <li class="breadcrumb-item active">Rental Update form</li>
    </ol>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action={{ route('rentals.update', $rental->id) }} method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-4">
                                <label for="customerName" class="form-label">Customer Name</label>
                                <select class="form-select form-select-sm" id="customerName" name="user_id">
                                    <option value="{{ $rental->user_id }}">{{ $rental->user->name }}</option>
                                    @foreach ($customers as $customer)
                                        <option value={{ $customer->id }}>{{ $customer->name }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="carID" class="form-label">Car Details</label>
                                <select class="form-select form-select-sm" id="carID" name="car_id">
                                    {{-- <option value="">Select One</option> --}}
                                    <option value="{{ $rental->car_id }}">{{ $rental->car->name }} ,
                                        {{ $rental->car->brand }}</option>
                                    @foreach ($cars as $car)
                                        <option value={{ $car->id }}>{{ $car->name }}</option>
                                    @endforeach
                                </select>
                                @error('car_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="rentalStartDate" class="form-label">Rental Start Date</label>
                                <input type="date" name="start_date" value="{{ $rental->start_date }}"
                                    class="form-control form-control-sm" id="rentalStartDate">
                                @error('start_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <label for="totalCost" class="form-label">Total Cost</label>
                                <input type="text" name="total_cost" value="{{ $rental->total_cost }}"
                                    class="form-control form-control-sm" id="totalCost">
                                @error('total_cost')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select form-select-sm" id="status" name="status">
                                    <option value="{{ $rental->status }}">{{ $rental->status }}</option>
                                    <option value="Ongoing">Ongoing</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Canceled">Canceled</option>
                                </select>
                                @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="rentalEndDate" class="form-label">Rental End Date</label>
                                <input type="date" name="end_date" value="{{ $rental->end_date }}"
                                    class="form-control form-control-sm" id="rentalEndDate">
                                @error('end_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="my-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
