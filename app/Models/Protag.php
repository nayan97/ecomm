<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Protag extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function Product()
    {
        return $this -> belongsToMany(Product::class);
    }
}
