<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array(
                'nombre' => 'Televisor',
                'imagen' => 'https://picsum.photos/200/300',
                'precio' => 100,
                'stock' => 10,
                'estatus' => 1,
                'id_categoria' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => 'Laptop',
                'imagen' => 'https://picsum.photos/200/300',
                'precio' => 200,
                'stock' => 20,
                'estatus' => 0,
                'id_categoria' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => 'Leche',
                'imagen' => 'https://picsum.photos/200/300',
                'precio' => 15,
                'stock' => 30,
                'estatus' => 1,
                'id_categoria' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => 'Pan',
                'imagen' => 'https://picsum.photos/200/300',
                'precio' => 10,
                'stock' => 40,
                'estatus' => 1,
                'id_categoria' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => 'Playera con cuello',
                'imagen' => 'https://picsum.photos/200/300',
                'precio' => 25,
                'stock' => 50,
                'estatus' => 0,
                'id_categoria' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => 'Blue Jean',
                'imagen' => 'https://picsum.photos/200/300',
                'precio' => 30,
                'stock' => 60,
                'estatus' => 1,
                'id_categoria' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
        ];

        DB::table('productos')->insert($data);
    }
}
