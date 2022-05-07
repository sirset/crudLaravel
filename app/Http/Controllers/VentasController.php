<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VentaModel;
use App\Models\ProductoModel;
Use Redirect;

class VentasController extends Controller
{
    public function index(Type $var = null)
    {
        $ventas = VentaModel::all();
        $productos = ProductoModel::all();
        return view("Ventas.home",["ventas"=>$ventas,"productos"=>$productos]);
    }
    public function store(Request $request)
    {
        $validad = $request->validate([
            'producto_id' => ['required'],
            'cantidad' => ['required', 'integer','min:1']
        ]);
        $producto = productoModel::find($request->producto_id);
        if(!$producto){
            $request->session()->flash("errorc", 'selecione un producto');
            return redirect('ventas');
        }
        if($producto->stock >= $request->cantidad){
            $resp=VentaModel::create($request->except("_token"));
            $producto->stock -= $request->cantidad;
            $producto->save();
            $request->session()->flash("success", 'Venta guardada!.');
            return Redirect::back();
        }else{
            $request->session()->flash("errorc", 'no hay suficiente en stock');
            return redirect('ventas');
        }
        
    }
}
