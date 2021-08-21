<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClustersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clusters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->string('dxde');
            $table->string('mode');
            $table->string('freq');
            $table->integer('band');
            $table->string('dx');
            $table->string('flag');
            $table->integer('lotw');
            $table->integer('eqsl');
            $table->string('comment');
            $table->string('notice');
            $table->timestamp('time'); //2021-08-20 10:08:15
            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clusters');
    }
}
