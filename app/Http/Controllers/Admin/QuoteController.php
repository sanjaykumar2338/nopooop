<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::latest()->paginate(10);
        return view('admin.pages.quotes.index', compact('quotes'))->with('activeLink', 'quotes');
    }
}
