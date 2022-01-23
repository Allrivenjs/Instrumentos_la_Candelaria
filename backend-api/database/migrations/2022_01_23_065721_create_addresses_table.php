<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('zipcode');
            $table->string('reference')->nullable();
            $table->string('city');
            $table->unsignedBigInteger('countries_id');
            $table->foreign('countries_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');

            $table->unsignedBigInteger('states_id');
            $table->foreign('states_id')
                ->references('id')
                ->on('states')
                ->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('addresses');
    }
}
