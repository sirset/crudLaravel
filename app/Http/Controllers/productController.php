<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductoModel;

class productController extends Controller
{
    //
    public function index()
    {
        $productos = ProductoModel::all();
        return view("Product.Home",["productos"=>$productos]);
    }

    public  function create()
    {   
        return view("Product.create");
    }
    public function store(Request $request)
    {
        $validad = $request->validate([
            'name' => ['required', 'string',"unique:productos,name"],
            'precio' => ['required', 'integer'],
            'referencia' => ['required', 'string',"unique:productos,referencia"],
            'peso' => ['required', 'integer'],
            'categoria' => ['required', 'string'],
            'stock' => ['required', 'integer'],]);
        $resp = ProductoModel::create($request->except("_token"));
        return redirect()->route('productos.index');
    }

    public function edit($id)
    {
        $producto = ProductoModel::find($id);
        return view("Product.edit",compact("producto"));
    }
    public function update(Request $request,$id)
    {
        $producto = request()->except(["_token","_method"]);
        ProductoModel::where('id','=',$id)->update($producto);
        return  redirect("productos");
    }
    public function destroy($id)
    {
        ProductoModel::destroy($id);
        return  redirect("productos");
    }
    
}
