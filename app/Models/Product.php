<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'name',
        'code',
        'categoryId',
        'finish',
        'size',
        'location',
        'status',  'crate','qtySqm','qtyPcs','imageUrl'
    ];
}
