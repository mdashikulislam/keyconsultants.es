<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVisibleColumnFeatureTable extends Migration
{
    public function up()
    {
        Schema::table('features', function (Blueprint $table) {
            $table->tinyInteger('visible')->default(1);
        });
    }

    public function down()
    {
        Schema::table('features', function (Blueprint $table) {
            //
        });
    }
}
