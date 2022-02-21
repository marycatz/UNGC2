<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDobTable extends Migration
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
                    $table->dropColumn('dob');
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
        //
        if (Schema::hasTable('users')) {
            Schema::table(
                'users',
                function (Blueprint $table) {
                    $table->date('dob')->nullable()->after('dob');
                }
            );
        }
        
    }
}
