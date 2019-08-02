<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('summary')->nullable();
            $table->LongText('description')->nullable();
            $table->string('image')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->unsignedBigInteger('added_by')->nullable();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate("CASCADE");
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
        Schema::dropIfExists('blogs');
    }
}
