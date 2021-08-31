<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageSliderContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('page_slider_content')) {
            Schema::create('page_slider_content', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->string('head1')->nullable();
                $table->string('head2')->nullable();
                $table->text('desc')->nullable();
                $table->text('image')->nullable();
                $table->text('page')->default("home");
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('page_slider_content', function (Blueprint $table) {
        });
    }
}
