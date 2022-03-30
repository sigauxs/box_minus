<?php

namespace Database\Seeders;

use App\Models\TypeDocument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_document = new TypeDocument();
        $type_document->name = "Factura";
        $type_document->save();

        $type_document_1 = new TypeDocument();
        $type_document_1->name = "Factura Electrónica";
        $type_document_1->save();

        $type_document_2 = new TypeDocument();
        $type_document_2->name = "Recibo de Caja";
        $type_document_2->save();

        $type_document_3 = new TypeDocument();
        $type_document_3->name = "Cuenta de Cobro";
        $type_document_3->save();

    }
}
