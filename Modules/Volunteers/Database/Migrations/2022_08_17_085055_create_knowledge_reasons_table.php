<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\HowKnow\Entities\Reason;
use Modules\Volunteers\Entities\Volunteer;

class CreateKnowledgeReasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowledge_reasons', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Volunteer::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Reason::class)->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('knowledge_reasons');
    }
}
