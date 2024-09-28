<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = User::where('role', 'customer')->latest()->paginate(10);
        return view('admin.customers.index', compact('customers'));
    }

    public function create()
    {
        return view('admin.customers.create');
    }

    public function store(Request $request, User $customer)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'address' => ['required'],
            'phone_number' => ['required'],
        ]);

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone_number;
        $customer->password = Hash::make($request->password);
        $customer->save();

        toastr()->success('Customer Created Successfully');
        return redirect()->route('customers.index');
    }

    public function edit(User $customer)
    {
        return view('admin.customers.edit', compact('customer'));
    }

    public function update(Request $request, User $customer)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            // 'password' => ['required'],
            'address' => ['required'],
            'phone_number' => ['required'],
        ]);

        $customer->where('id', $customer->id)->update($validate);
        toastr()->success('Customer Updated Successfully');
        return redirect()->route('customers.index');
    }

    public function destroy(User $customer)
    {
        $customer->delete();
        toastr()->success('Customer Delete Successfully');
        return redirect()->back();
    }
}
