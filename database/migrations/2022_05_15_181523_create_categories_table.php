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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->category_id();
            $table->string('hardware_name',50);
            $table->timestamp('buying_date',);
            $table->string('motherboard_type',50);
            $table->string('cpu_type',50);
            $table->string('ssd_type',50);
            $table->string('ram_type',50);
            $table->string('size',50);
            $table->string('comment',50);
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
        Schema::dropIfExists('categories');
    }
};
