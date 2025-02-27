<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(ProductList::class, 'category_id');
    }
}
