<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    use HasFactory;

    protected $table = "productos";

    protected $fillable = [
        'name',
        'referencia',
        'precio',
        'peso',
        'categoria',
        'stock',
        'status'
    ];
}
