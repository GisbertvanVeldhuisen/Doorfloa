<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_page', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable(true);
            $table->text('intro')->nullable(true);
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
        Schema::dropIfExists('animal_page');
    }
}
