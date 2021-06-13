<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCityColumnPropertyTable extends Migration
{
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->string('city')->change();
        });
    }

    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            //
        });
    }
}
