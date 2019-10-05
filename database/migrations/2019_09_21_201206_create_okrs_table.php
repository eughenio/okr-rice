<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOkrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('okrs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('result');
            $table->string('objective');
            $table->string('quarter_year');
            $table->bigInteger('priority');
            $table->bigInteger('percentage');
            $table->unsignedBigInteger('area_id');
            $table->timestamps();

            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['area_id']);
        Schema::dropIfExists('okrs');
    }
}