@extends('components.PageLayout')
@section('content')
    <ol class="breadcrumb my-3 d-flex justify-content-between align-items-center">
        <li class="breadcrumb-item active">Rental List</li>
        <a href="{{ route('rentals.create') }}" class="btn btn-sm btn-info">Create Rental</a>
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
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href={{ route('rentals.edit', $rental['id']) }}
                                            class="btn btn-sm btn-success">Edit</a>
                                        <form action="{{ route('rentals.destroy', $rental['id']) }}" method="post">
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
                    {{ $rentals->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
