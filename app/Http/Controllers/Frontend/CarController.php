<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $carsType = Car::select('car_type')->groupBy('car_type')->get();
        $carsBrand = Car::select('brand')->groupBy('brand')->get();
        $cars = Car::latest()->get();
        return view('frontend.cars.index', compact('cars', 'carsType', 'carsBrand'));
    }

    public function searchFilter(Request $request)
    {
        if ($request->car_type == null && $request->brand == null && $request->daily_rent_price == null) {
            return redirect('/');
        }

        $carsType = Car::select('car_type')->groupBy('car_type')->get();
        $carsBrand = Car::select('brand')->groupBy('brand')->get();
        $cars = Car::orWhere('car_type', $request->car_type)->orWhere('brand', $request->brand)->orWhere('daily_rent_price', $request->daily_rent_price)->latest()->get();
        return view('frontend.cars.index', compact('cars', 'carsType', 'carsBrand'));
    }

    public function show(Car $car)
    {
        return view('frontend.cars.show', compact('car'));
    }
}
