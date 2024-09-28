<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::with(['user', 'car'])->latest()->paginate(10);

        return view('admin.rentals.index', compact('rentals'));
    }
    public function create()
    {
        $customers = User::where('role', 'customer')->latest()->get();
        $cars = Car::latest()->get();

        return view('admin.rentals.create', compact('customers', 'cars'));
    }

    public function store(Request $request, Rental $rental)
    {
        $validate = $request->validate([
            'user_id' => ['required'],
            'car_id' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'total_cost' => ['required'],
            'status' => ['required'],
        ]);

        $rental->create($validate);
        toastr()->success('Car Rental Created Successfully');
        return redirect()->route('rentals.index');
    }

    public function edit(Rental $rental)
    {
        $customers = User::where('role', 'customer')->latest()->get();
        $cars = Car::latest()->get();
        return view('admin.rentals.edit', compact('rental', 'customers', 'cars'));
    }

    public function update(Request $request, Rental $rental)
    {
        $validate = $request->validate([
            'user_id' => ['required'],
            'car_id' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'total_cost' => ['required'],
            'status' => ['required'],
        ]);

        $rental->update($validate);
        toastr()->success('Car Rental Updated Successfully');
        return redirect()->route('rentals.index');
    }

    public function destroy(Rental $rental)
    {
        $rental->delete();
        toastr()->success('Car Rental Deleted Successfully');
        return redirect()->route('rentals.index');
    }
}
