<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFertilizationTypeIdToWaitStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wait_stocks', function (Blueprint $table) {
            $table->unsignedBigInteger('fertilization_type_id')->nullable();
            $table->foreign('fertilization_type_id')->references('id')->on('fertilization_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wait_stocks', function (Blueprint $table) {
            //
        });
    }
}
