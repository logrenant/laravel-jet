<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parent_id')->nullable()->unsigned()->default(null);
            $table->string('title', 75);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image', 100)->nullable();
            $table->string('slug', 100)->nullable();
            $table->string('status', 5)->nullable()->default('false');
            $table->timestamps();

            $table->foreign('parent_id')->on('categories')->references('id')->onDelete('CASCADE');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
