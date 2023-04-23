<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genders;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero1 = new Genders;
        $genero1->name ="M";
        $genero1->description ="Masculino";
        $genero1->save();

        $genero1 = new Genders;
        $genero1->name ="F";
        $genero1->description ="Femenino";
        $genero1->save();

    }
}
