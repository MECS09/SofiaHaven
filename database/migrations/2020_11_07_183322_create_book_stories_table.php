<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_stories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('story_id')->nullable();
            $table->string('story_name');
            $table->string('chapter');
            $table->string('media')->nullable();
            $table->string('media_desc')->nullable();
            $table->string('rated');
            $table->string('privacy')->default('public');
            $table->string('publish')->default('publish');
            $table->string('content')->nullable();
            $table->string('reads')->nullable();
            $table->string('comments')->nullable();
            $table->string('order')->nullable();
            $table->string('activity_log')->nullable();
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
        Schema::dropIfExists('book_stories');
    }
}
