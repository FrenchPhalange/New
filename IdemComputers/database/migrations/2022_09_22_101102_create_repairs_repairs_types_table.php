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
        Schema::create('repairs_repairs_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('repair_id')->constrained();
            $table->foreign('repairs_types_id')->references('id')->on('repair_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repairs_repairs_types');
    }
};
