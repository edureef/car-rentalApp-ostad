<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCars = Car::count();
        $availableCars = Car::where('availability', 1)->count();
        $totalRentals = Rental::count();
        $totalRentalsEarnings = Rental::sum('total_cost');
        $cars = Car::latest()->get();

        $carsType = Car::select('car_type')->groupBy('car_type')->get();
        $carsBrand = Car::select('brand')->groupBy('brand')->get();

        return view('admin.dashbord', compact(['totalCars', 'availableCars', 'totalRentals', 'totalRentalsEarnings', 'cars', 'carsType', 'carsBrand']));
    }
}
