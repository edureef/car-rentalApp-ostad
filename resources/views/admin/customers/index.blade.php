@extends('components.PageLayout')
@section('content')
    <ol class="breadcrumb my-3 d-flex justify-content-between align-items-center">
        <li class="breadcrumb-item active">Customer List</li>
        <a href="{{ route('customers.create') }}" class="btn btn-sm btn-info">Create Customer</a>
    </ol>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped text-center">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer['name'] }}</td>
                                <td>{{ $customer['email'] }}</td>
                                <td>{{ $customer['phone_number'] }}</td>
                                <td>{{ $customer['address'] }}</td>
                                <td class="d-flex justify-content-between align-items-center">
                                    <a href={{ route('customers.edit', $customer['id']) }}
                                        class="btn btn-sm btn-success">Edit</a>
                                    <form action="{{ route('customers.destroy', $customer['id']) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit"
                                            onclick="return confirm('Are you sure want to delete ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $customers->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
