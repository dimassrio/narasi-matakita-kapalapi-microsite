<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingGenderToUserCharts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_charts', function (Blueprint $table) {
            $table->integer('male')->default(0);
			$table->integer('female')->default(0);
			$table->integer('other')->default(0);
			$table->integer('undefined')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_charts', function (Blueprint $table) {
            $table->dropColumn('male');
			$table->dropColumn('female');
			$table->dropColumn('other');
			$table->dropColumn('undefined');
        });
    }
}
