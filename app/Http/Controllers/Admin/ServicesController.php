<?php

namespace App\Http\Controllers\Admin;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (auth()->check() && auth()->user()->role == 1) {
                return $next($request);
            }

            abort(403, 'Unauthorized');
        });
    }

    public function index()
    {
        $services = Services::paginate(5);
        return view('admin.pages.services.index', compact('services'))->with('activeLink', 'services');
    }

    public function create()
    {
        return view('admin.pages.services.create')->with('activeLink', 'services');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string|max:255'
        ]);

        $service = new Services();
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->meta_title = $request->input('meta_title');
        $service->meta_description = $request->input('meta_description');
        $service->meta_keywords = $request->input('meta_keywords');

        $slug = Str::slug($request->input('title'));
        $existingSlug = Services::where('slug', $slug)->exists();

        if ($existingSlug) {
            $counter = 1;
            do {
                $newSlug = $slug . '-' . $counter;
                $existingSlug = Services::where('slug', $newSlug)->exists();
                $counter++;
            } while ($existingSlug);
            $slug = $newSlug;
        }

        $service->slug = $slug;
        $service->save();

        return redirect('/admin/services')->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $service = Services::findOrFail($id);
        return view('admin.pages.services.edit', compact('service'))->with('activeLink', 'services');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string|max:255'
        ]);

        $service = Services::findOrFail($id);
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->meta_title = $request->input('meta_title');
        $service->meta_description = $request->input('meta_description');
        $service->meta_keywords = $request->input('meta_keywords');

        $slug = Str::slug($request->input('title'));
        $existingSlug = Services::where('slug', $slug)->where('id', '!=', $id)->exists();

        if ($existingSlug) {
            $counter = 1;
            do {
                $newSlug = $slug . '-' . $counter;
                $existingSlug = Services::where('slug', $newSlug)->exists();
                $counter++;
            } while ($existingSlug);
            $slug = $newSlug;
        }

        $service->slug = $slug;
        $service->save();

        return redirect('/admin/services')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $service = Services::findOrFail($id);
        $service->delete();
        return redirect('/admin/services')->with('success', 'Service deleted successfully.');
    }
}