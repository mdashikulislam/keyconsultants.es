<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('slug',255);
            $table->text('description');
            $table->string('reference_number');
            $table->integer('price');
            $table->integer('city');
            $table->integer('region');
            $table->integer('room')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('land_area')->nullable();
            $table->integer('living_space')->nullable();
            $table->integer('balcony_terrace_area')->nullable();
            $table->string('property_status')->nullable();
            $table->string('additionally')->nullable();
            $table->string('property_type')->nullable();
            $table->string('feature_image');
            $table->enum('post_status',['Inactive','Active'])->default('Inactive');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
