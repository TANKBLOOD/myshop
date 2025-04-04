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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('title', 100);
            $table->string('meta_title', 128);
            $table->string('slug', 128);
            $table->text('summary');
            // $table->smallInteger('type');
            $table->string('price');
            $table->float('discount')->nullable();
            $table->integer('quantity');
            // $table->boolean('shop')->default(0);
            $table->dateTime('published_at')->nullable();
            $table->dateTime('starts_at')->nullable();
            $table->dateTime('ends_at')->nullable();
            $table->text('content')->nullable();
            $table->boolean('publish')->default(0);
            $table->string('avatar_image')->nullable();
            $table->text('product_specifications')->nullable();
            $table->boolean('out_of_stack')->default(0);
            $table->text('images')->nullable();
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
        Schema::dropIfExists('products');
    }
};
