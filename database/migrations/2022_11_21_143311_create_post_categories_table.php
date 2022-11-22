<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_categories', function (Blueprint $table) {
            $table->id();
            $table-> unsignedBigInteger('post_id');
            $table-> unsignedBigInteger('category_id');

            $table->index('post_id', 'post_category_post_idx');
            $table->index('category_id', 'post_category_category_idx');

            $table->foreign('post_id', 'post_category_post_fk')->on('posts')->references('id');
            $table->foreign('category_id', 'post_category_category_fk')->on('categories')->references('id');
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
        Schema::dropIfExists('post_categories');
    }
};
