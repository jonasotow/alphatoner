<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInShoppingCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_shopping_carts',function(Blueprint $tabla){
            $tabla->increments("id");
            $tabla->integer('product_id')->unsigne();
            $tabla->integer('shopping_cart_id')->unsigne();

            $table->foreign("product_id")->refences("id")->on("products");
            $table->foreign("shopping_cart_id")->refences("id")->on("shopping_carts");

            $tabla->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('in_shopping_carts');
    }
}
