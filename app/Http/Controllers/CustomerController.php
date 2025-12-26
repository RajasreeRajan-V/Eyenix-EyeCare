<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EyeCamp;
use App\Models\About;
use App\Models\Appointment;
class CustomerController extends Controller
{
    public function dashboard()
    {
        return view('customer.dashboard');
    }
    public function about()
    {
        return view('customer.about');
    }
    public function service()
    {
        return view('customer.service');
    } 
    public function eyecamp()
    {
        $eyeCamps = EyeCamp::all();
        return view('customer.eyecamp',compact('eyeCamps'));
    }  
    public function AppointmentStore(Request $request)
    {
        $request->validate([
            'eye_camp_id' => 'required|exists:eye_camps,id',
            'name'        => 'required|string|max:255',
            'phone'       => 'required|string|max:20',
        ]);

        Appointment::create([
            'eye_camp_id' => $request->eye_camp_id,
            'name'        => $request->name,
            'phone'       => $request->phone,
        ]);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }


}
