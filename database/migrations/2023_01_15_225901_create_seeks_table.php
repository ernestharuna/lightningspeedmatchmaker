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
        Schema::create('seeks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('age_range');
            $table->string('sexual_orientation');
            $table->string('eye_color');
            $table->string('body_type');
            $table->string('religion');
            $table->double('income');
            $table->string('drugs');
            $table->string('drinks');
            $table->string('city');
            $table->string('country');
            
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
        Schema::dropIfExists('seeks');
    }
};
