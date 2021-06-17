<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PriceColumnChangeProperty extends Migration
{
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->string('price')->change();
        });
    }

    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            //
        });
    }
}
