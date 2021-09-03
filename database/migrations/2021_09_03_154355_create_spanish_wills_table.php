<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpanishWillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spanish_wills', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('first_name');
            $table->string('surname_at_birth')->nullable();
            $table->string('gender');
            $table->string('dob');
            $table->string('passport');
            $table->string('country_of_issue');
            $table->date('expiry_date');
            $table->string('postcode');
            $table->string('country');
            $table->string('profession');
            $table->string('email');
            $table->string('telephone');
            $table->string('place_of_birth');
            $table->string('country_of_birth');
            $table->string('nationality');
            $table->text('address');


            $table->string('mother_name');
            $table->string('mother_living_status');
            $table->string('father_name');
            $table->string('father_living_status');
            $table->string('marital_status');
            $table->string('marriage_time');
            $table->string('current_marriage_country');
            $table->string('current_spouse_first_name');
            $table->string('current_spouse_surname');
            $table->tinyInteger('current_no_of_children')->default(0);
            $table->string('previous_marriage_country')->nullable();
            $table->string('previous_spouse_first_name')->nullable();
            $table->string('previous_spouse_surname')->nullable();
            $table->tinyInteger('previous_no_of_children')->default(0);
            $table->text('current_child_first_name')->nullable();
            $table->string('current_child_surname')->nullable();
            $table->string('current_child_type')->nullable();
            $table->text('previous_child_first_name')->nullable();
            $table->text('previous_child_surname')->nullable();
            $table->string('previous_child_type')->nullable();
            $table->string('have_other_child')->nullable();
            $table->string('how_other_child')->nullable();
            $table->text('other_child_first_name')->nullable();
            $table->text('other_child_surname')->nullable();
            $table->text('other_child_type')->nullable();

            $table->enum('regulated',['Yes','No'])->default('No');
            $table->enum('executor_distribution',['Yes','No'])->default('No');
            $table->text('executor_first_name')->nullable();
            $table->text('executor_surname')->nullable();
            $table->text('executor_nie')->nullable();
            $table->text('executor_address')->nullable();
            $table->enum('made_previous',['Yes','No'])->default('No');
            $table->enum('resident_of_spain',['Yes','No'])->default('No');
            $table->text('beneficiary_first_name')->nullable();
            $table->text('beneficiary_last_name')->nullable();
            $table->text('beneficiary_relationship')->nullable();
            $table->text('beneficiary_description')->nullable();
            $table->enum('payment_status',['Pending','Accept','Rejected'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spanish_wills');
    }
}
