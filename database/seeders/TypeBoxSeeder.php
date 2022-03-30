<?php

namespace Database\Seeders;

use App\Models\TypeBox;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeBoxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeBox = new TypeBox();
        $typeBox->name =  "Mercadeo & Tecnología";
        $typeBox->save();

        $typeBox_1 = new TypeBox();
        $typeBox_1->name =  "Operaciones / Fidelización";
        $typeBox_1->save();

        $typeBox_2 = new TypeBox();
        $typeBox_2->name =  "Administrativa";
        $typeBox_2->save();

        $typeBox_3 = new TypeBox();
        $typeBox_3->name =  "Infraestructura";
        $typeBox_3->save();

        $typeBox_4 = new TypeBox();
        $typeBox_4->name =  "Desarrollo Organizacional";
        $typeBox_4->save();


    }
}
