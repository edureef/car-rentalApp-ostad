@extends('components.PageLayout')
@section('content')
    <ol class="breadcrumb my-3">
        <li class="breadcrumb-item active">Customer Update form</li>
    </ol>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action={{ route('customers.update', $customer->id) }} method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-4">
                                <label for="customerName" class="form-label">Customer Name</label>
                                <input type="text" name="name" value="{{$customer->name}}" class="form-control form-control-sm" id="customerName">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="customerEmail" class="form-label">Email</label>
                                <input type="email" name="email" value="{{$customer->email}}" class="form-control form-control-sm"
                                    id="customerEmail">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- <div class="col-4">
                                <label for="customerPassword" class="form-label">Password</label>
                                <input type="password" name="password" value="{{$customer->password}}" class="form-control form-control-sm"
                                    id="customerPassword">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div> --}}
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <label for="customerAddress" class="form-label">Address</label>
                                <input type="text" name="address" value="{{$customer->address}}" class="form-control form-control-sm"
                                    id="customerAddress">
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <input type="text" name="phone_number" value="{{$customer->phone_number}}" class="form-control form-control-sm"
                                    id="phoneNumber">
                                @error('phone_number')
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
