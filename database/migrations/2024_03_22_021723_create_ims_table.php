<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImsTable extends Migration
{
    public function up()
    {
        Schema::create('ims', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('serial_number')->unique();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->date('date');
            $table->time('time');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ims');
    }
}

