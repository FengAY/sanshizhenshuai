<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSouvenirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('souvenirs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name',50);
            $table->unsignedDecimal('price',12,2);
            $table->string('description',20);
            $table->unsignedInteger('supplier_id',false);
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->unsignedInteger('category_id',false);
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('pathoffile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('souvenirs');
    }
}
