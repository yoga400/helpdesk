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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('picture')->nullable();
            $table->string('title');
            $table->longText('description');
            $table->integer('assign_to');
            $table->boolean('status');
            // $table->unsignedBigInteger('user_id');
            $table->date('due_on');
            $table->timestamps();

            $table->foreignId('assign_to')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
