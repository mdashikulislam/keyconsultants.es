<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PivotColumnNamePropertyMoreImages extends Migration
{
    public function up()
    {
        Schema::table('property_more_images', function (Blueprint $table) {
            $table->renameColumn('image_id','more_media_id');
        });
    }

    public function down()
    {
        Schema::table('property_more_images', function (Blueprint $table) {
            //
        });
    }
}
