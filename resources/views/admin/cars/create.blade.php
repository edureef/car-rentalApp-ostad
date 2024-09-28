@extends('components.PageLayout')
@section('content')
    <ol class="breadcrumb my-3">
        <li class="breadcrumb-item active">Car Create form</li>
    </ol>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action={{ route('cars.store') }} method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-4">
                                <label for="carName" class="form-label">Car Name</label>
                                <input type="text" name="name" class="form-control form-control-sm" id="carName">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="brandName" class="form-label">Brand Name</label>
                                <input type="text" name="brand" class="form-control form-control-sm" id="brandName">
                                @error('brand')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="carModel" class="form-label">Car Model</label>
                                <input type="text" name="model" class="form-control form-control-sm" id="carModel">
                                @error('model')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <label for="yearOfManufacture" class="form-label">Year of Manufacture</label>
                                <input type="text" name="year" class="form-control form-control-sm"
                                    id="yearOfManufacture">
                                @error('year')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="carType" class="form-label">Car Type</label>
                                <input type="text" name="car_type" class="form-control form-control-sm" id="carType">
                                @error('car_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="dailyRentPrice" class="form-label">Daily Rent Price</label>
                                <input type="text" name="daily_rent_price" class="form-control form-control-sm"
                                    id="dailyRentPrice">
                                @error('daily_rent_price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div>
                                    <label for="availabilityStatus" class="form-label">Status</label>
                                    <select class="form-select form-select-sm" name="availability" id="availabilityStatus">
                                        <option value="">Choose one</option>
                                        <option value="1">Available</option>
                                        <option value="0">Not Available</option>
                                    </select>
                                    @error('availability')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="carImage" class="form-label">Upload Car Image</label>
                                <input type="file" name="image" class="form-control form-control-sm" id="carImage">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="my-4">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
