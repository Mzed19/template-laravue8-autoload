<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalledsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calleds', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->integer('requester_id');
            $table->integer('technician_id')->nullable();
            $table->integer('client_id');
            $table->integer('plant_id')->nullable();
            $table->integer('contract_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->integer('hidden_id')->nullable();
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
        Schema::dropIfExists('calleds');
    }
}
