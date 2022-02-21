<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('companies')) {
            Schema::table(
                'companies',
                function (Blueprint $table) {
                    $table->string('company_iso140462014_file_name', 255)->nullable()->after('company_ssm_file_path');
                    $table->string('company_iso140462014_file_path', 255)->nullable()->after('company_iso140462014_file_name');

                    $table->string('company_iso460012019_file_name', 255)->nullable()->after('company_iso140462014_file_path');
                    $table->string('company_iso460012019_file_path', 255)->nullable()->after('company_iso460012019_file_name');

                    $table->string('company_iso140012015_file_name', 255)->nullable()->after('company_iso460012019_file_path');
                    $table->string('company_iso140012015_file_path', 255)->nullable()->after('company_iso140012015_file_name');

                    $table->string('company_iso140062020_file_name', 255)->nullable()->after('company_iso140012015_file_path');
                    $table->string('company_iso140062020_file_path', 255)->nullable()->after('company_iso140062020_file_name');

                    $table->string('company_iso304152021_file_name', 255)->nullable()->after('company_iso140062020_file_path');
                    $table->string('company_iso304152021_file_path', 255)->nullable()->after('company_iso304152021_file_name');

                    $table->string('company_iso370012016_file_name', 255)->nullable()->after('company_iso304152021_file_path');
                    $table->string('company_iso370012016_file_path', 255)->nullable()->after('company_iso370012016_file_name');
                }
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('companies')) {
            Schema::table(
                'companies',
                function (Blueprint $table) {
                    $table->dropColumn('company_iso140462014_file_name');
                    $table->dropColumn('company_iso140462014_file_path');

                    $table->dropColumn('company_iso460012019_file_name');
                    $table->dropColumn('company_iso460012019_file_path');

                    $table->dropColumn('company_iso140012015_file_name');
                    $table->dropColumn('company_iso140012015_file_path');

                    $table->dropColumn('company_iso140062020_file_name');
                    $table->dropColumn('company_iso140062020_file_path');

                    $table->dropColumn('company_iso304152021_file_name');
                    $table->dropColumn('company_iso304152021_file_path');

                    $table->dropColumn('company_iso370012016_file_name');
                    $table->dropColumn('company_iso370012016_file_path');
                }
            );
        }
    }
}
