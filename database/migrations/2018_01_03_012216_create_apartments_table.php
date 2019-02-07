<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('city');
             $table->string('street');
            $table->string('bed');
            $table->string('bath');
             $table->string('area');
              $table->string('price');
            $table->string('property_type');
            $table->text('details');
             $table->string('author');
             $table->string('name');
             $table->string('phone');
             $table->string('email');
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
        Schema::dropIfExists('apartments');
    }
}
