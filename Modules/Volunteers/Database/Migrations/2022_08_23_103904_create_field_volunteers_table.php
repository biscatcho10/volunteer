<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Volunteers\Entities\Field;
use Modules\Volunteers\Entities\Volunteer;

class CreateFieldVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_volunteers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Field::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Volunteer::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('field_volunteers');
    }
}
