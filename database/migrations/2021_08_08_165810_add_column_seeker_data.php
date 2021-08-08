<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSeekerData extends Migration
{
    public function up()
    {
        Schema::table('seeker_data', function (Blueprint $table) {
            $table->string('for')->nullable();
            $table->string('feature')->nullable();
        });
    }

    public function down()
    {
        Schema::table('seeker_data', function (Blueprint $table) {
            //
        });
    }
}
