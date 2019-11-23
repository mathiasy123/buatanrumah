<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hero_image', '255')->nullable();
            $table->string('title_hero', '50')->nullable();
            $table->string('subtitle_hero', '50')->nullable();
            $table->string('text_hero', '255')->nullable();
            $table->string('title_about', '20')->nullable();
            $table->string('text_about', '255')->nullable();
            $table->string('video', '255')->nullable();
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
        Schema::dropIfExists('vendor_contents');
    }
}
