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
        Schema::create('repairers', function (Blueprint $table) {
            $table->id();
            $table->varchar('name')->nullable();
            $table->varchar('phone')->nullable();
            $table->varchar('email')->nullable();
            $table->varchar('siret')->nullable();
            $table->varchar('address')->nullable();
            $table->varchar('city')->nullable();
            $table->varchar('postal_code')->nullable();
            $table->varchar('country')->nullable();
            $table->tinyInteger('is_internal')->nullable();
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
        Schema::dropIfExists('repairers');
    }
};
