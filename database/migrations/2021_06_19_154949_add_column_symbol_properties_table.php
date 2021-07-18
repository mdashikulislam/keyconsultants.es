<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSymbolPropertiesTable extends Migration
{
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->string('symbol',5)->default('€');
        });
    }

    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            //
        });
    }
}
