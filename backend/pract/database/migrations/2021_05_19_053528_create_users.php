<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('名前');
            $table->string('password')->comment('パスワード');
            $table->string('contents', 100)->comment('ヒトコト');
            $table->integer('total_point')->unsigned()->comment('累計Pt');
            $table->integer('followers')->unsigned()->comment('フォロワー数');
            $table->date('last_login_at')->comment('最終ログイン日時');
            $table->string('sessions', 255)->comment('セッションID');
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
        Schema::dropIfExists('users');
    }
}
