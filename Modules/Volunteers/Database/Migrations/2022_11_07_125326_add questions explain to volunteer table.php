<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQuestionsExplainToVolunteerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('volunteers', function (Blueprint $table) {
            $table->text('question4_exp')->nullable()->after('category_exp');
            $table->text('question5_exp')->nullable()->after('question4_exp');
            $table->text('question6_exp')->nullable()->after('question5_exp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('volunteers', function (Blueprint $table) {
            $table->dropColumn('question4_exp');
            $table->dropColumn('question5_exp');
            $table->dropColumn('question6_exp');
        });
    }
}
