<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionSixTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_six_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_six_id');
            $table->string('locale');
            $table->string('name');
            $table->unique(['question_six_id', 'locale']);
            $table->foreign('question_six_id')->references('id')->on('question_sixes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_six_translations');
    }
}
