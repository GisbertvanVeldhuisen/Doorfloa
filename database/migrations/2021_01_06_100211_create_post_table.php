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
            $table->integer('category_id')->default(0);
            $table->char('post_title')->nullable(true);
            $table->string('post_ingredients')->nullable(true);
            $table->char('post_preparation_title')->nullable(true);
            $table->string('post_preparation')->nullable(true);
            $table->text('page_color')->nullable(true);
            $table->text('accent_color')->nullable(true);
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
