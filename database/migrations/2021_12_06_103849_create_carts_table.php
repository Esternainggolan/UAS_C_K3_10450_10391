<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drug_id');
            $table->integer('jumlah');
            $table->float('harga');
            $table->unsignedBigInteger('user_id');
            $table->foreign('drug_id')->references('id')->on('drugs');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('carts');
    }
}
