<?php

namespace App;

class Number extends Model
{
    public function qote(){
    	return $this->belongsTo(Qote::class);
    }
}
