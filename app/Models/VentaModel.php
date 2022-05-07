<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductoModel;

class VentaModel extends Model
{
    use HasFactory;

    protected $table = "ventas";
    
    protected $fillable = [
        'producto_id',
        'cantidad',
    ];

    protected $useTimestamps = true;

    public function producto(){
        return $this->belongsTo(ProductoModel::class);
    }
}
