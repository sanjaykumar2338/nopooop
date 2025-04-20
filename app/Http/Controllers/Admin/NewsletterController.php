<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscription;

class NewsletterController extends Controller
{
    public function index()
    {
        $subscribers = NewsletterSubscription::latest()->paginate(10);
        return view('admin.pages.newsletter.index', compact('subscribers'))->with('activeLink', 'newsletter');
    }
}
