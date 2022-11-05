<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionFiveTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_five_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_five_id');
            $table->string('locale');
            $table->string('name');
            $table->unique(['question_five_id', 'locale']);
            $table->foreign('question_five_id')->references('id')->on('question_fives')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_five_translations');
    }
}
