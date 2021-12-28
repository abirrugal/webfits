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
    public function up():void
    {
        Schema::create('products', function (Blueprint $table) {
            
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('brand_id')->nullable();

            $table->string('title',200);
            $table->string('slug', 200);
            $table->string('image', 200);
            $table->longText('description');
            $table->tinyInteger('in_stock')->default(1);
            $table->decimal('price', 8, 2);

            $table->string('discount',200)->nullable()->default(0);
            $table->string('discounted_price',200)->nullable()->default(0);

            $table->decimal('sale_price', 8, 2)->nullable();

            $table->unsignedBigInteger('stock_amount')->default(0);
            $table->unsignedBigInteger('sale_amount')->default(0);
            $table->unsignedBigInteger('remaining_amount')->default(0);
            $table->tinyInteger('active')->default(1);

            $table->string('shipping_cost', 200)->nullable();
            $table->string('premium', 200)->nullable();
            $table->string('comfort', 200)->nullable();
            $table->string('decor_dining', 200)->nullable();
            $table->string('bedroom', 200)->nullable();
            $table->string('comfy_bedding', 200)->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down():void
    {
        Schema::dropIfExists('products');
    }
}
