<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable =   ['title','description','price','status','photo','condition', 'categories','photo', 'slug', 'meta_title', 'meta_description', 'meta_keywords'];

    public function images()
{
    return $this->hasMany(product_images::class);
}
}
