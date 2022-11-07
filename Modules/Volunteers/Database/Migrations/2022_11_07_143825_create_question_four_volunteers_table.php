<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Volunteers\Entities\QuestionFour;
use Modules\Volunteers\Entities\Volunteer;

class CreateQuestionFourVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_four_volunteers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Volunteer::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(QuestionFour::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_four_volunteers');
    }
}
