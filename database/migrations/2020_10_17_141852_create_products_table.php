<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {


            $table->bigIncrements('Code');
            $table->string('Name', 255);
            $table->integer('Scale');
            $table->string('vendor', 255);
            $table->string('PdtDescription', 255);
            $table->integer('QtyInStock');
            $table->float('BuyPrice');
            $table->string('MSRP', 255);
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
        Schema::dropIfExists('products');
    }
}
