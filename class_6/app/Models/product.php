<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    // protected $table = "myproducts";
    protected $fillable = ["name", "price" , "stock" , "description"];
}