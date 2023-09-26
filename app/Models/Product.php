<?php

namespace App\Models;

use App\Models\Protag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded =[];

public function tag()
{

    return $this -> belongsToMany(Protag::class);
}

}
