<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AppointmentController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::with('eyeCamp')
        ->orderBy('created_at', 'asc') 
        ->get();
        return view('admin.admin_appointment', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Appointment::findOrFail($id)->delete();
        return redirect()
        ->route('admin.appointment.index')
        ->with('success', 'Brand deleted successfully');
    }

    public function downloadAppointments()
    {
        $appointments = Appointment::with('eyeCamp')->latest()->get();

        $pdf = Pdf::loadView('admin.appointments_pdf', compact('appointments'))
                    ->setPaper('A4', 'landscape');

        return $pdf->download('appointments-list.pdf');
    }
}
