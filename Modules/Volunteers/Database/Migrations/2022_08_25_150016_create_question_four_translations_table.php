<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionFourTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_four_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_four_id');
            $table->string('locale');
            $table->string('name');
            $table->unique(['question_four_id', 'locale']);
            $table->foreign('question_four_id')->references('id')->on('question_fours')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_four_translations');
    }
}
