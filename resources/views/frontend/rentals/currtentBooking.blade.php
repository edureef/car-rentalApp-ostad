@extends('components.PageLayout')
@section('content')
    <ol class="breadcrumb my-3">
        <li class="breadcrumb-item active">My Current Rental List</li>
    </ol>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped text-center">
                        <tr>
                            <th>Rental ID</th>
                            <th>Customer Name</th>
                            <th>Car Details (Name, Brand)</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Total Cost</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($rentals as $rental)
                            <tr>
                                <td>{{ $rental->id }}</td>
                                <td>{{ $rental->user->name }}</td>
                                <td>{{ $rental->car->name }} , {{ $rental->car->brand }}</td>
                                <td>{{ $rental->start_date }}</td>
                                <td>{{ $rental->end_date }}</td>
                                <td>{{ $rental->total_cost }}</td>
                                <td>{{ $rental->status }}</td>
                                <td>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <form action="{{ route('frontend.rentals.cancel') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="rentalId" value="{{ $rental['id'] }}">
                                            <button class="btn btn-sm btn-outline-danger" type="submit"
                                                onclick="return confirm('Are you sure you want to Cancel the booking ?')">Cancel</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $rentals->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
