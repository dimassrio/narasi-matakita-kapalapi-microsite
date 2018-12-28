<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('address')->nullable();
			$table->string('city')->nullable();
			$table->string('province')->nullable();
			$table->string('phone')->nullable();
			$table->string('birth')->nullable();
			$table->enum('gender', ['Laki-Laki', 'Perempuan', ''])->default('');
			$table->string('occupation')->nullable();
			$table->string('twitter')->nullable();
			$table->string('facebook')->nullable();
			$table->string('instagram')->nullable();
			$table->string('interest')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('address');
			$table->dropColumn('city');
			$table->dropColumn('province');
			$table->dropColumn('phone');
			$table->dropColumn('birth');
			$table->dropColumn('gender');
			$table->dropColumn('occupation');
			$table->dropColumn('twitter');
			$table->dropColumn('facebook');
			$table->dropColumn('instagram');
			$table->dropColumn('interest');
        });
    }
}
