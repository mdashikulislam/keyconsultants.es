<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveTableColumn extends Migration
{
    public function up()
    {
        Schema::table('spanish_wills', function (Blueprint $table) {
            $table->string('nie')->nullable();
            $table->renameColumn('previous_child_first_name','previous_info');
            $table->dropColumn('previous_marriage_country');
            $table->dropColumn('previous_spouse_first_name');
            $table->dropColumn('previous_spouse_surname');
            $table->dropColumn('previous_no_of_children');
            $table->dropColumn('previous_child_surname');
            $table->dropColumn('previous_child_type');
        });
    }

    public function down()
    {
        Schema::table('spanish_wills', function (Blueprint $table) {
            //
        });
    }
}
