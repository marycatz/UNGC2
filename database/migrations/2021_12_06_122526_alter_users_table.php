<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            Schema::table(
                'users',
                function (Blueprint $table) {
                    $table->foreignId('company_id')->nullable()->after('id')->constrained('companies')->cascadeOnUpdate()->nullOnDelete();
                    $table->boolean('is_active')->nullable()->default(1)->after('remember_token');
                    $table->tinyInteger('is_contact')->nullable()->default(0)->after('remember_token');
                    $table->string('position')->nullable()->after('remember_token');
                    $table->enum('access_group', ['nis', 'ungc', 'company'])->nullable()->default('company')->after('remember_token');
                    $table->enum('access_level', ['admin', 'sme', 'corporate'])->nullable()->default('sme')->after('remember_token');
                    $table->string('phone', 50)->nullable()->after('password');
                    $table->dateTime('last_login_at')->nullable()->after('remember_token');
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
        if (Schema::hasTable('users')) {
            Schema::table(
                'users',
                function (Blueprint $table) {
                    $table->dropForeign(['company_id']);
                    $table->dropColumn('company_id');
                    $table->dropColumn('access_group');
                    $table->dropColumn('access_level');
                    $table->dropColumn('position');
                    $table->dropColumn('is_active');
                    $table->dropColumn('is_contact');
                }
            );
        }
    }
}
