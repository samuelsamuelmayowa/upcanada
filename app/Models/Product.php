<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable =   ['title','description','price','status','photo','condition', 'categories','photo', 'slug'];

    public function images()
{
    return $this->hasMany(product_images::class);
}
}
