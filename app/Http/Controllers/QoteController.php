<?php

namespace App\Http\Controllers;
use App\Qote;
use App\Number;

class QoteController extends Controller
{
    public function index(){
    	$names=Qote::all();	
    	return view('profile.index',compact('names'));
    }

    public function show(Qote $person){
    	return view('profile.show',compact('person'));
    }

    public function store(){
    	
    	$this->validate(request(),[
    		'name'=>'required',
    		'address'=>'required'
    	]);

    	Qote::create(request(['name','address']));

		

    	return redirect(route('index'));
    }

    public function add(Qote $person){
        $person->addNumber(request('number'));
        /*Number::create([
            'number'=>request('number'),
            'qote_id'=>$person->id
        ]);*/
        return back();

    }
    public function sub(Number $number){
        $number->delete();
        return back();
        //dd('$number');

    }
}
