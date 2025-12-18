<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactusController  
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = ContactUs::query();

        if ($request->filled('search')) {
        $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->orWhere('phone', 'like', '%' . $request->search . '%')
                ->orWhere('message', 'like', '%' . $request->search . '%');
        }

        $contacts = $query->latest()->paginate(10);

        return view('admin.admin_contact', compact('contacts'));
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
    public function destroy($id)
    {
        ContactUs::findOrFail($id)->delete();

        return redirect()
        ->route('admin.contactus.index')
        ->with('success', 'Contact message deleted successfully');
    }
    public function reply(Request $request)
    {
        $request->validate([
            'email'   => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Mail::raw($request->message, function ($mail) use ($request) {
            $mail->to($request->email)
                    ->subject($request->subject);
        });

        return back()->with('success', 'Reply sent successfully!');
    }

}
