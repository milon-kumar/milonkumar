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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('image');
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->tinyInteger('status');
            $table->string('btn');
            $table->string('color')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->softDeletes();
            $table->string('others_one')->nullable();
            $table->string('others_two')->nullable();
            $table->string('others_three')->nullable();

//            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
