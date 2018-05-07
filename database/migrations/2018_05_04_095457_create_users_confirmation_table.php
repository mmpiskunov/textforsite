<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersConfirmationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_confirmation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token', 255)->nullable(false);
            $table->unsignedInteger('user_id')->nullable(false)->unique();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::table('users_confirmation', function(Blueprint $table) {
            $table->dropForeign('users_confirmation_user_id_foreign');
        });
        Schema::dropIfExists('users_confirmation');
    }
}
