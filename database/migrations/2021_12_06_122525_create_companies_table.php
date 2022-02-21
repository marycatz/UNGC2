<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'companies',
            function (Blueprint $table) {
                $table->id();
                $table->string('company_name', 150)->unique();
                $table->string('company_ssm', 50)->unique();
                $table->enum('company_type', ['sme', 'corporate'])->default('sme');
                $table->string('company_state', 50);
                $table->string('company_industry', 150)->default('Consultancy & other services');
                $table->integer('company_portfolio_size')->nullable()->default(0);
                $table->tinyInteger('company_verified')->nullable()->default(0);
                $table->dateTime('company_verified_at')->nullable();
                $table->dateTime('company_expired_at')->nullable();
                $table->tinyInteger('company_ssm_verified')->nullable()->default(0);
                $table->dateTime('company_ssm_verified_at')->nullable();
                $table->string('company_ssm_file_name', 255)->nullable();
                $table->string('company_ssm_file_path', 255)->nullable();
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
        Schema::dropIfExists('companies');
    }
}
