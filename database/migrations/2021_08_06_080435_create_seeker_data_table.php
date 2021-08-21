<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeekerDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seeker_data', function (Blueprint $table) {
            $table->id();
            $table->integer('seeker_info_id');
            $table->string('reference_no')->nullable();
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('type')->nullable();
            $table->string('min_price')->nullable();
            $table->string('max_price')->nullable();
            $table->string('min_bed')->nullable();
            $table->string('max_bed')->nullable();
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
        Schema::dropIfExists('seeker_data');
    }
}
