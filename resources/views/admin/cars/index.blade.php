@extends('components.PageLayout')
@section('content')
    <ol class="breadcrumb my-3 d-flex justify-content-between align-items-center">
        <li class="breadcrumb-item active">Car List</li>
        <a href="{{ route('cars.create') }}" class="btn btn-sm btn-info">Create Car</a>
    </ol>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped text-center">
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Year of Manufacture</th>
                                <th>Car Type</th>
                                <th>Daily Rent Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($cars as $car)
                                <tr>
                                    <td>
                                        @if (!$car['image'])
                                            No Image
                                        @else
                                            <img width="100" height="100" style="border-radius: 50%"
                                                src="{{ asset($car['image']) }}" alt="car image">
                                        @endif
                                    </td>
                                    <td>{{ $car['name'] }}</td>
                                    <td>{{ $car['brand'] }}</td>
                                    <td>{{ $car['model'] }}</td>
                                    <td>{{ $car['year'] }}</td>
                                    <td>{{ $car['car_type'] }}</td>
                                    <td>{{ $car['daily_rent_price'] }}</td>
                                    <td>{{ $car['availability'] == 1 ? 'Available' : 'Not Available' }}</td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href={{ route('cars.edit', $car['id']) }}
                                                class="btn btn-sm btn-success">Edit</a>
                                            <form action="{{ route('cars.destroy', $car['id']) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" type="submit"
                                                    onclick="return confirm('Are you sure want to delete ?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $cars->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
