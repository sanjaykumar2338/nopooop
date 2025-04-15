<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;
use App\Models\Menu;
use App\Models\Pages;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function index($menuId)
    {
        $menu = Menu::findOrFail($menuId);
        $menuItems = MenuItem::where('menu_id', $menuId)->orderBy('order')->paginate(10);
        return view('admin.pages.menu_items.index', compact('menu', 'menuItems'))->with('activeLink', 'menuitems');
    }

    public function create($menuId)
    {
        $menu = Menu::findOrFail($menuId);
        $pages = Pages::all();
        return view('admin.pages.menu_items.create', compact('menu', 'pages'))->with('activeLink', 'pages');
    }

    public function store(Request $request, $menuId)
    {
        $request->validate([
            'label' => 'required|string|max:255',
            'type' => 'required|in:page,custom',
            'page_id' => 'nullable|exists:pages,id',
            'url' => 'nullable|url',
        ]);

        MenuItem::create([
            'menu_id' => $menuId,
            'label' => $request->label,
            'type' => $request->type,
            'page_id' => $request->type == 'page' ? $request->page_id : null,
            'url' => $request->type == 'custom' ? $request->url : null,
            'order' => MenuItem::where('menu_id', $menuId)->max('order') + 1,
        ]);

        return redirect()->route('menu.items.index', $menuId)->with('success', 'Menu item created.');
    }

    public function edit($menuId, $id)
    {
        $menu = Menu::findOrFail($menuId);
        $menuItem = MenuItem::findOrFail($id);
        $pages = Pages::all();
        return view('admin.pages.menu_items.edit', compact('menu', 'menuItem', 'pages'))->with('activeLink', 'pages');
    }

    public function update(Request $request, $menuId, $id)
    {
        $request->validate([
            'label' => 'required|string|max:255',
            'type' => 'required|in:page,custom',
            'page_id' => 'nullable|exists:pages,id',
            'url' => 'nullable|url',
        ]);

        $item = MenuItem::findOrFail($id);
        $item->update([
            'label' => $request->label,
            'type' => $request->type,
            'page_id' => $request->type == 'page' ? $request->page_id : null,
            'url' => $request->type == 'custom' ? $request->url : null,
        ]);

        return redirect()->route('menu.items.index', $menuId)->with('success', 'Menu item updated.');
    }

    public function destroy($menuId, $id)
    {
        MenuItem::destroy($id);
        return redirect()->route('menu.items.index', $menuId)->with('success', 'Menu item deleted.');
    }

    public function updateOrder(Request $request, $menuId)
    {
        foreach ($request->order as $index => $id) {
            MenuItem::where('id', $id)->update(['order' => $index + 1]);
        }

        return response()->json(['message' => 'Order updated successfully.']);
    }
}