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
        Schema::create('it_admins_users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name',50);
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->boolean('itadmin');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('it_admins_users');
    }
};
