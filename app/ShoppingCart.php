<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = ["status"];

    
    public function inShoppingCarts(){
        return $this->hasMany('App\InShoppingCart');
    }
    public function products(){
        return $this->belongsToMany('App\Product','in_shopping_carts');
    }
    public function productsSize(){
        return $this->products()->count();
    }  

    public function total(){
        return $this->products()->sum("pricing");
    }


	public static function findOrCreateBySessionID($shopping_cart_id){
        if($shopping_cart_id)
            // Buscar el carrito de compras con este ID
            return ShoppingCart::findBySession($shopping_cart_id);
        else
            // Crear un carrito de compras
            return ShoppingCart::createWithoutSession();
    }

    public static function findBySession($shopping_cart_id){
        return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWithoutSession(){
        return ShoppingCart::create([
            "status" => "incompleted"
        ]);
    }
}
