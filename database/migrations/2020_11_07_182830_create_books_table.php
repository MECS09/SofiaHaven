<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover');
            $table->string('author');
            $table->string('rated');
            $table->string('privacy')->default('public');
            $table->string('publish')->default('publish');
            $table->string('editors')->nullable();
            $table->string('description')->nullable();
            $table->string('genre')->nullable();
            $table->string('type')->default('standalone');
            $table->foreignId('series_id')->nullable();
            $table->string('series_title')->nullable();
            $table->string('pages')->nullable();
            $table->string('views')->nullable();
            $table->string('ratings')->nullable();
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
        Schema::dropIfExists('books');
    }
}
