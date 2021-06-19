<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemovePostIdColumnMoreMediaTable extends Migration
{
    public function up()
    {
        Schema::table('more_media', function (Blueprint $table) {
            $table->dropColumn('property_id');
        });
    }

    public function down()
    {
        Schema::table('more_media', function (Blueprint $table) {
            //
        });
    }
}
