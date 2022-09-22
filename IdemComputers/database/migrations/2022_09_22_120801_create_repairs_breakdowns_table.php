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
        Schema::create('repairs_breakdowns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('repair_id')->constrained();
            $table->foreign('breakdown_id')->references('id')->on('breakdown');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repairs_breakdowns');
    }
};
