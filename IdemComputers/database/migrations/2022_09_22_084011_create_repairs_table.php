<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('computer_id')->constrained();
            //$table->foreign('computer_id')->references('id')->on('computer')->onDelete('cascade');
            $table->foreignId('client_id')->constrained();
            $table->foreignId('repairer_id')->constrained();
            $table->text('diagnostic');
            $table->tinyInteger('is_repaired');
            $table->tinyInteger('is_broken');
            $table->dateTime('returned_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repairs');
    }
};
