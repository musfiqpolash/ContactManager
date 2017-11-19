
    @extends('layout.master')

    @section('content')
    
    <div class="row">
    	<div class="col-lg-4">
    		<div class="jumbotron">
    			<h2>Contacts</h2>
                @foreach($names as $name)
                <p><a href="/profile/{{$name->id}}"> {{$name->name}}</a></p>
                @endforeach         
    		</div>
    	</div>

    	<div class="col-lg-4"></div>

    	<div class="col-lg-4">
    		<form method="POST" action="/profile">
    			{{csrf_field()}}

			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" name="name" required>
			  </div>

			  <div class="form-group">
			    <label for="address">Address</label>
			    <input type="text" class="form-control" id="address" name="address" required>
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>

			</form>	
    	</div>
    </div>


    @endsection