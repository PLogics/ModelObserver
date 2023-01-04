<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'slug', 'unique_id'
    ];
}


//if i create table through migration then there is no need to mention table in model  
// done only with php artisan make:migration create_products-table -m  or -mc for both controller and model
 