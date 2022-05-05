<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductoModel;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new ProductoModel();
        $usuario->name= "Manzanas";
        $usuario->referencia= "CE1020003";
        $usuario->precio= 2500;
        $usuario->peso= "1";
        $usuario->categoria = "Frutas";
        $usuario->stock = 10;
        $usuario->status= "Active";
        $usuario->save();
        //
        $usuario = new ProductoModel();
        $usuario->name= "Leche";
        $usuario->referencia= "CE1020153";
        $usuario->precio= 3000;
        $usuario->peso= "1";
        $usuario->categoria = "Lacteos";
        $usuario->categoria = 20;
        $usuario->status= "Active";
        $usuario->save();
    }
}
