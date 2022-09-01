<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // LLENADO DE DATOS PARA LA TABLA CATEGORIAS
        $categoria1 = new Categoria();
        
        $categoria1->codigoc = 1;
        $categoria1->nombre = "Gama Alta";
        
        $categoria1->save();
            

        $categoria2 = new Categoria();
        
        $categoria2->codigoc = 2;
        $categoria2->nombre = "Gama Media";
        
        $categoria2->save();


        $categoria3 = new Categoria();
        
        $categoria3->codigoc = 3;
        $categoria3->nombre = "Gama Baja";
        
        $categoria3->save();



        // LLENADO DE DATOS PARA LA TABLA PRODUCTOS
        $producto1 = new Producto();
        
        $producto1->codigoP = 101;
        $producto1->descripcion = "Samsung Galaxy S22";
        $producto1->categoria_id = 1;
        $producto1->precio = 4999;
        $producto1->stock = 5;
        $producto1->atributo = "importado";
        
        $producto1->save();


        $producto2 = new Producto();
        
        $producto2->codigoP = 102;
        $producto2->descripcion = "Xiaomi Redmin S9";
        $producto2->categoria_id = 2;
        $producto2->precio = 1299;
        $producto2->stock = 8;
        $producto2->atributo = "noImportado";
        
        $producto2->save();


        $producto3 = new Producto();
        
        $producto3->codigoP = 103;
        $producto3->descripcion = "ZTE Blade A51";
        $producto3->categoria_id = 3;
        $producto3->precio = 799;
        $producto3->stock = 10;
        $producto3->atributo = "noImportado";
        
        $producto3->save();

    }
}
