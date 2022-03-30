<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{

    public function run()
    {
        $area = new Area();
        $area->name =  "Mercadeo & Tecnología";
        $area->save();

        $area_1 = new Area();
        $area_1->name =  "Operaciones / Fidelización";
        $area_1->save();

        $area_2 = new Area();
        $area_2->name =  "Administrativa";
        $area_2->save();

        $area_3 = new Area();
        $area_3->name =  "Infraestructura";
        $area_3->save();

        $area_4 = new Area();
        $area_4->name =  "Desarrollo Organizacional";
        $area_4->save();

        $area_5 = new Area();
        $area_5->name =  "Gerencia";
        $area_5->save();

        $area_6 = new Area();
        $area_6->name =  "Proyecto Drummond";
        $area_6->save();

        $area_7 = new Area();
        $area_7->name =  "Proyecto Promigas";
        $area_7->save();
    }
}
