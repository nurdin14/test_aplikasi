<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'reference_no',
        'price',
        'quantity',
        'payment_amount',
        'id_product',
    ];
}
