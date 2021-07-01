<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(['categoria' => 'Guadalajara']);
        DB::table('categorias')->insert(['categoria' => 'Ciudad de Mexico']);
        DB::table('categorias')->insert(['categoria' => 'Monterrey']);
    }
}
