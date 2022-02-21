<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersnewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('answers');
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assessments_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('companies_id');
            $table->unsignedBigInteger('entry_id')->nullable();
            $table->text('value');
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
        // Schema::dropIfExists('answers');
    }
}
