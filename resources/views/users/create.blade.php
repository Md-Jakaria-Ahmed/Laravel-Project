@extends('layout.main')

@section('main_content')

	<h2>Create New User</h2>

	<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">New User</h6>
    </div>
    <div class="card-body">
      <div class="row justify-content-md-center">
       <div class="col-md-6">
        <form method="post" action="{{ url('users') }}">
        	@csrf
		    <div class="form-group row">
		      <label for="name" class="col-sm-2 col-form-label">Name</label>
		      <div class="col-sm-10">
		      	<input type="text" name="name" id="name" class="form-control" placeholder="name">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="email" class="col-sm-2 col-form-label">Email</label>
		      <div class="col-sm-10">
		      	<input type="email" name="email" id="email" class="form-control" placeholder="email">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="name" class="col-sm-2 col-form-label">Name</label>
		      <div class="col-sm-10">
		      	<input type="text" name="name" id="name" class="form-control" placeholder="name">
		      </div>
		    </div>
		    <div class="text-right mt-4">
		    	<button  type="submit" class="btn btn-primary">Submit</button>
		    </div>
       	</form>
       </div>
      </div>
    </div>
</div>


@stop 