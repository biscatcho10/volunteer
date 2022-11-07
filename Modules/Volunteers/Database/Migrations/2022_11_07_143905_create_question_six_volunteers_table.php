<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Volunteers\Entities\QuestionSix;
use Modules\Volunteers\Entities\Volunteer;

class CreateQuestionSixVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_six_volunteers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Volunteer::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(QuestionSix::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_six_volunteers');
    }
}
