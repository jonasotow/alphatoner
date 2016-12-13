<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function scopeTotal($query){
        $consulta = $query->orderBy("id","desc");
        return $consulta;
	}

    public function scopeLatest($query){
        $consulta = $query->where('activo', '=', 'SI');
        $consulta = $consulta->orderBy("id","desc");
        return $consulta;
    }

    public function paypalItem(){
    	return \PaypalPayment::item()->setName($this->title)
    								->setDescription($this->description)
    								->setCurrency("MXN")
    								->setQuantity("1")
    								->setPrice($this->pricing);
    }
}
