<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('title', 100);
            $table->string('meta_title', 128);
            $table->string('slug', 128);
            $table->tinyText('summary');
            $table->smallInteger('type');
            $table->string('sku', 100);
            $table->float('price');
            $table->float('discount');
            $table->smallInteger('quantity');
            $table->boolean('shop')->default(0);
            $table->dateTime('published_at');
            $table->dateTime('starts_at');
            $table->dateTime('ends_at');
            $table->text('content');
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
}
