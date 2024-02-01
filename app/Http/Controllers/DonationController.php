<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function show()
    {
        return view('donation');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'amount' => 'required|numeric',
            'receipt' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the donation in the database
        Donation::create([
            'user_id' => Auth::id(), // Use Auth::id() instead of auth()->id()
            'amount' => $request->input('amount'),
            'receipt' => $request->file('receipt')->store('receipts', 'public'),
        ]);

        // Redirect back with a success message
        return redirect()->route('donation')->with('success', 'Dermaan berjaya dihantar!');
    }

}
