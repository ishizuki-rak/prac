<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTargetLocations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_target_locations', function (Blueprint $table) {
            $table->id();
            $table->intger('user_id')->nullable(false);
            $table->intger('location_id')->nullable(false);
            $table->date('went_at')->nullable()->comment('入店日時');
            $table->integer('stars', 2)->comment('0～5までの評価');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_target_locations');
    }
}
