<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'menu_id', 'label', 'type', 'page_id', 'url', 'order',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    
    public function page()
    {
        return $this->belongsTo(\App\Models\Pages::class, 'page_id');
    }
}
