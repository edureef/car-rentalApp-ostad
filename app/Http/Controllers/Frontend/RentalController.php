<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\BookingMailAdmin;
use App\Mail\BookingMailCustomer;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RentalController extends Controller
{
    public function showHistory($id)
    {
        $rentals = Rental::where('status', '!=', 'Ongoing')->where('user_id', $id)->with(['user', 'car'])->latest()->paginate(10);

        return view('frontend.rentals.index', compact('rentals'));
    }

    public function showCurrentBooking($id)
    {
        $rentals = Rental::where('user_id', $id)->where('status', 'Ongoing')->with(['user', 'car'])->latest()->paginate(10);

        return view('frontend.rentals.currtentBooking', compact('rentals'));
    }

    public function setBook(Request $request, Rental $rental)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        // Check for existing bookings for the same car
        $conflict = Rental::where('car_id', $request->car_id)
            ->where('status', 'Ongoing')
            ->where(function ($query) use ($request) {
                $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                    ->orWhereBetween('end_date', [$request->start_date, $request->end_date])
                    ->orWhere(function ($query) use ($request) {
                        $query->where('start_date', '<=', $request->start_date)
                            ->where('end_date', '>=', $request->end_date);
                    });
            })
            ->exists();

        if ($conflict) {
            return redirect()->back()->with('error', 'The car has already been booked for the selected date');
        }

        $data = Rental::create([
            'user_id' => $request->user_id,
            'car_id' => $request->car_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_cost' => $request->total_cost,
        ]);

        Mail::to('soft.rifat@gmail.com')->send(new BookingMailAdmin($data));
        Mail::to($data->user->email)->send(new BookingMailCustomer($data));
        toastr()->success('Car Booked Successfully');
        return redirect()->back();
    }

    public function cancelBooking(Request $request, Rental $rental)
    {
        $rental->where('id', $request->rentalId)->update(['status' => 'Canceled']);
        toastr()->success('Booked Cancel Successfully');
        return redirect()->back();
    }

}
