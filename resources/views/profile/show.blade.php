@extends('layout.master')

@section('content')
	<div class="row">
		<div class="col-lg-4 jumbotron">
		    <h3>Name: {{$person->name}} </h3>
		    <h4>Home Town : {{$person->address}}</h4>
		    Contact Number
		    @foreach($person->numbers as $number)
		    <ul>
		    	<li>{{$number->number}}<a href="/delete/{{$number->id}}"> Delete</a></li>
		    </ul>
		    @endforeach
	    </div>
	    <div class="col-lg-4"></div>
	    <div class="col-lg-4">
	    	<form method="POST" action="/profile/{{$person->id}}/add">
	    		{{csrf_field()}}
	    		<div class="form-group">
				    <label for="number">Phone Number</label>
				    <input type="text" class="form-control" id="number" name="number" required>
			  	</div>
			  	<button type="submit" class="btn btn-primary">Add</button>
	    	</form>
	    </div>
    </div>
    

@endsection