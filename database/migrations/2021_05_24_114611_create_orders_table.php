<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('status_id');
            $table->string('cname');
            $table->string('email')->unique();
            $table->integer('phone')->required();
            $table->string('ptorepair')->required();
            $table->string('model')->nullable();
            $table->string('comment')->nullable();
            $table->string('photo');
            $table->date('duedate')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
