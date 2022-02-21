<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'assessment_records',
            function (Blueprint $table) {
                $table->id();
                $table->foreignId('assessment_id')->constrained('assessments')->cascadeOnUpdate()->cascadeOnDelete();
                $table->string('dimension', 150)->nullable();
                $table->string('subcategory', 150)->nullable();
                $table->string('indicator', 150)->nullable();
                $table->string('indicator_note', 150)->nullable();
                $table->text('question')->nullable();
                $table->tinyInteger('answer')->nullable()->default(0);
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessment_records');
    }
}
