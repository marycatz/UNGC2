<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'assessments',
            function (Blueprint $table) {
                $table->id();
                $table->foreignId('company_id')->constrained('companies')->cascadeOnUpdate()->cascadeOnDelete();
                $table->boolean('progress')->nullable()->default(0);
                $table->string('progress_route', 100)->nullable();
                $table->text('isoanswer')->nullable();
                $table->boolean('is_complete')->nullable()->default(0);
                $table->string('serialno', 255)->unique();
                $table->decimal('escore', 8, 2)->nullable()->default(0);
                $table->decimal('sscore', 8, 2)->nullable()->default(0);
                $table->decimal('gscore', 8, 2)->nullable()->default(0);
                $table->decimal('total_score', 8, 2)->nullable()->default(0);
                $table->dateTime('completed_at')->nullable();
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
        Schema::dropIfExists('assessments');
    }
}
