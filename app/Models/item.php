<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $fillable = ['name', 'category_id', 'price', 'stock', 'description'];
    protected $table = 'items';

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
