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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('paragraph_id')->nullable();
            $table->longText('user_given_paragraph')->nullable();
            $table->longText('total_paragraph_words')->nullable();
            $table->longText('diff_words')->nullable();
            $table->longText('user_input_words')->nullable();
            $table->longText('missing_percentage')->nullable();
            $table->longText('result')->nullable();
            $table->longText('wpm')->nullable();
            $table->longText('accuracy')->nullable();
            $table->longText('percentage')->nullable();
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
        Schema::dropIfExists('results');
    }
};
