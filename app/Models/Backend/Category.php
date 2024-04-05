<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\Product;
use Illuminate\Database\Eloquent;
class Category extends Model
{
    use HasFactory;
    public function product(){
        return $this->hasMany(Product::class);
    }
}
