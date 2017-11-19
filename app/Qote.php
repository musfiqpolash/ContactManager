<?php

namespace App;


class Qote extends Model
{
    public function numbers(){
    	return $this->hasMany(Number::class);
    }

    public function addNumber($number){
    	$this->numbers()->create(compact('number'));
    }
}
