<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['tag' => 'Nuevo']);
        Tag::create(['tag' => 'Usado']);
        Tag::create(['tag' => 'Electronica']);
        Tag::create(['tag' => 'Hombre']);
        Tag::create(['tag' => 'Mujer']);
        Tag::create(['tag' => 'Infantil']);
    }
}
