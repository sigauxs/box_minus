<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('nit');
            $table->string('supplier');
            $table->unsignedInteger('expense_id');
            $table->unsignedInteger('area_id')->nullable();
            $table->unsignedInteger('types_box_id')->nullable();
            $table->unsignedInteger('cost_center_id')->nullable();
            $table->unsignedInteger('cost_sub_center_id')->nullable();
            $table->unsignedInteger('types_document_id')->nullable();
            $table->string('otro')->nullable();
            $table->string('identification');
            $table->decimal('subtotal');
            $table->decimal('iva');
            $table->decimal('total');

            $table->foreign('expense_id')
                   ->references('id')->on('expenses')
                   ->onDelete('set null');
            $table->foreign('area_id')
                   ->references('id')->on('areas')
                   ->onDelete('set null');
            $table->foreign('types_box_id')
                   ->references('id')->on('types_boxes')
                   ->onDelete('set null');
            $table-> foreign('cost_center_id')
                    ->references('id')->on('costs_center')
                    ->onDelete('set null');
            $table-> foreign('cost_sub_center_id')
                    ->references('id')->on('costs_sub_center')
                    ->onDelete('set null');
            $table-> foreign('types_document_id')
                    ->references('id')->on('types_documents')
                    ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
