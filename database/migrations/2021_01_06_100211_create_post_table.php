<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('title_intro')->default(0);
            $table->text('intro')->default(0);
            $table->char('title')->nullable(true);
            $table->text('ingredients')->nullable(true);
            $table->char('preparation_title')->nullable(true);
            $table->text('preparation')->nullable(true);
            $table->text('page_color')->nullable(true);
            $table->text('accent_color')->nullable(true);
            $table->unsignedBigInteger('category')->nullable(true);
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
        Schema::dropIfExists('posts');
    }
}
