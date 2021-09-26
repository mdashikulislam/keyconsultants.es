<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_taxes', function (Blueprint $table) {
            $table->id();
            $table->text('first_name');
            $table->text('last_name');
            $table->text('nie');
            $table->text('dob');
            $table->text('address');
            $table->text('city');
            $table->text('zip');
            $table->text('country');
            $table->text('ownership');
            $table->text('place_of_birth');

            $table->enum('ibi_payment',['Yes','No'])->default('Yes');
            $table->string('ibi_file')->nullable();
            $table->text('address_in_spain')->nullable();
            $table->string('city_2')->nullable();
            $table->string('state_2')->nullable();
            $table->string('postal_2')->nullable();
            $table->string('catastral_reference')->nullable();
            $table->string('catastral_value_in_euro')->nullable();

            $table->string('iban_code');
            $table->string('buy_the_property')->nullable();
            $table->enum('whole_tax_year',['Yes','No'])->default('Yes');

            $table->enum('rental_year',['Yes','No'])->default('Yes');
            $table->string('tax_year')->nullable();
            $table->string('contact_telephone')->nullable();
            $table->string('contact_email')->nullable();
            $table->integer('total_owner')->default(0);
            $table->decimal('total_amount',10,2)->default(0);
            $table->decimal('vat',10,2)->default(0);
            $table->decimal('sub_total',10,2)->default(0);
            $table->enum('status',['Pending','Accept'])->default('Pending');

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
        Schema::dropIfExists('online_taxes');
    }
}
