<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFormTypeTransactionsTable extends Migration
{
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->enum('form_type',['Will Form','Online Tax']);
        });
    }

    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            //
        });
    }
}
