<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->integer('code')->nullable();
            $table->string('title');
            $table->text('descripition')->nullable();
            $table->integer('value')->nullable();
            $table->integer('hours')->nullable();
            $table->integer('status')->default(1);
            $table->integer('billing_day')->default(1);
            $table->date('data_end_contract')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
