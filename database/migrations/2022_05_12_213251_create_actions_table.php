<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->integer('minutes')->nullable();
            $table->integer('called_id');
            $table->integer('technician_id');
            $table->integer('patrimonie_id')->nullable();
            $table->integer('type_id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('document_url')->nullable();
            $table->string('entry_date')->nullable();
            $table->integer('status_id')->nullable();
            
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
        Schema::dropIfExists('actions');
    }
}
