<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->paginate(10);
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(Request $request, Car $car)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'brand' => ['required'],
            'model' => ['required'],
            'year' => ['required'],
            'car_type' => ['required'],
            'daily_rent_price' => ['required'],
            'availability' => ['required'],
            'image' => ['required', 'image'],
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $img = $request->file('image');
            $fileName = time() . '_' . $img->getClientOriginalName();
            $img->move(public_path('uploads'), $fileName);
            $validate['image'] = 'uploads/' . $fileName;
        } else {
            return back()->withErrors(['image' => 'There was an issue uploading the image.']);
        }

        $car->create($validate);
        return redirect()->route('cars.index')->with('success', 'Car added successfully!');
    }

    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'brand' => ['required'],
            'model' => ['required'],
            'year' => ['required'],
            'car_type' => ['required'],
            'daily_rent_price' => ['required'],
            'availability' => ['required'],
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            if ($car->image && file_exists(public_path($car->image))) {
                unlink(public_path($car->image)); // Delete the file
            }

            $img = $request->file('image');
            $fileName = time() . '_' . $img->getClientOriginalName();
            $img->move(public_path('uploads'), $fileName);
            $validate['image'] = 'uploads/' . $fileName;
        }

        $car->update($validate);
        toastr()->success('Car Updated Successfully');
        return redirect()->route('cars.index');
    }

    public function destroy(Car $car)
    {
        if ($car->image && file_exists(public_path($car->image))) {
            unlink(public_path($car->image)); // Delete the file
        }
        $car->delete();
        toastr()->success('Car Deleted Successfully');
        return redirect()->back();
    }

}
