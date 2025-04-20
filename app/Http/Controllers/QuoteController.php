<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function showForm()
    {
        return view('frontend.pages.get-quote');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:20',
            'message' => 'nullable|string',
        ]);

        Quote::create($validated);

        return back()->with('status', 'Thank you! We will get back to you soon.');
    }
}
