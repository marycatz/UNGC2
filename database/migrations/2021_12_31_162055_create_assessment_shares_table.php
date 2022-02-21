<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentSharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'assessment_shares',
            function (Blueprint $table) {
                $table->id();
                $table->foreignId('company_id')->constrained('companies')->cascadeOnUpdate()->cascadeOnDelete();
                $table->unsignedBigInteger('corporate_id')->nullable();
                $table->foreignId('assessment_id')->nullable()->constrained('assessments')->cascadeOnUpdate()->nullOnDelete();
                $table->tinyInteger('status')->nullable()->default(0);
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
        Schema::dropIfExists('assessment_shares');
    }
}
