<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('user_name')->after('password')->nullable();
            $table->string('location')->after('user_name')->nullable();
            $table->text('bio')->after('location')->nullable();
            $table->text('facebook')->after('bio')->nullable();
            $table->text('twitter')->after('facebook')->nullable();
            $table->text('instagram')->after('twitter')->nullable();
            $table->text('linkedin')->after('instagram')->nullable();
            $table->text('sound_notification')->after('linkedin')->nullable();
            $table->text('desktop_notification')->after('sound_notification')->nullable();
            $table->text('profile_privacy')->after('desktop_notification')->nullable();
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
            //
        });
    }
};
