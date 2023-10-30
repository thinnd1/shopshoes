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

            $table->string('name', 255);
            $table->longText('content')->nullable();
            $table->mediumText('description')->nullable();
            $table->string('status', 60)->default('published');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('brand_id')->unsigned()->nullable()->index();
            $table->tinyInteger('is_featured')->default(0);
            $table->string('sku', 255);
            $table->double('price')->unsigned();
            $table->double('sale_price')->unsigned();
            $table->text('images')->nullable();
            $table->tinyInteger('sale_type')->default(0);
            $table->timestamp('sale_at')->nullable();
            $table->timestamp('end_sale_at')->nullable();
            $table->integer('views')->unsigned()->default(0);

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
