<?php
// FileHelper.php
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Setting;

if (!function_exists('fileToUrl')) {
    function fileToUrl($filePath)
    {
        $pathWithoutPublic = str_replace('public/', '', $filePath);
        $baseUrl = url('/');
        $url = $baseUrl . '/storage/' . $pathWithoutPublic;
        
        return $url;
    }
}

if (!function_exists('fileExist')) {
    function fileExist($url)
    {
        $fileExists = false;
        try {
            $response = \Illuminate\Support\Facades\Http::get($url);
            $statusCode = $response->status();
            $fileExists = ($statusCode >= 200 && $statusCode < 400);
        } catch (\Exception $e) {
            // Handle exceptions if the URL is unreachable or throws an error
            $fileExists = false;
        }

        return $fileExists;
    }
}

if (!function_exists('getMenuItems')) {
    function getMenuItems($slug = 'header')
    {
        $menu = Menu::where('slug', $slug)->first();

        if (!$menu) {
            return [];
        }

        return MenuItem::where('menu_id', $menu->id)
            ->orderBy('order', 'asc')
            ->get();
    }
}

if (!function_exists('getSetting')) {
    function getSetting($key = null)
    {
        static $settings = null;

        if (!$settings) {
            $settings = Setting::first();
        }

        if (!$settings) return null;

        return $key ? $settings->$key ?? null : $settings;
    }
}