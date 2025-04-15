<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::paginate(20);
        return view('admin.pages.menu.index', compact('menus'))->with('activeLink', 'menus');
    }

    public function create()
    {
        return view('admin.pages.menu.create')->with('activeLink', 'menus');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $slug = Str::slug($request->name);

        // Check if a menu with the same slug already exists
        if (Menu::where('slug', $slug)->exists()) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['name' => 'A menu with this name already exists.']);
        }

        Menu::create([
            'name' => $request->name,
            'slug' => $slug,
        ]);

        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('admin.pages.menu.edit', compact('menu'))->with('activeLink', 'menus');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $menu = Menu::findOrFail($id);
        $slug = Str::slug($request->name);

        $duplicate = Menu::where('slug', $slug)->where('id', '!=', $id)->exists();
        if ($duplicate) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['name' => 'A menu with this name already exists.']);
        }

        $menu->name = $request->name;
        $menu->slug = $slug;
        $menu->save();

        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }

    public function updateOrder(Request $request)
    {
        $orderData = $request->input('order');

        foreach ($orderData as $index => $id) {
            $menu = Menu::find($id);
            if ($menu) {
                $menu->order = $index + 1;
                $menu->save();
            }
        }

        return response()->json(['message' => 'Menu order updated successfully.']);
    }
}