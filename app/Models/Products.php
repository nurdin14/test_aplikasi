<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id_product';

    protected $fillable = [
        'id_product',
        'name',
        'price',
        'stock',
        'description',
    ];
}
