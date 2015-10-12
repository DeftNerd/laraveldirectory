<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWeightToCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::table('categories', function ($table) {
	    $table->tinyInteger('weight')->unsigned()->nullable()->after('description');
	    $table->text('description')->nullable()->change();
	});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function ($table) {
	    $table->dropColumn('weight');
	    $table->string('description')->nullable()->change();
	});
    }
}
