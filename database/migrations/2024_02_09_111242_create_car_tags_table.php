<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTagsTable extends Migration
{
    public function up()
    {
        Schema::create('car_tags', function (Blueprint $table) {
            $table->foreignId('tag_id')->constrained();
            $table->foreignId('car_id')->constrained();
            $table->primary(['tag_id', 'car_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('car_tags');
    }
}
