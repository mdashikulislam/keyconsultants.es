<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PropertyMoreImagesTable extends Migration
{
    public function up()
    {
        Schema::create('property_more_images', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id');
            $table->integer('image_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('property_more_images', function (Blueprint $table) {
            //
        });
    }
}
