@extends('layout.main')

@section('main_content')

	<h2>Create New Group</h2>

	<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">New Group</h6>
    </div>
    <div class="card-body">
        <div class="row justify-content-md-center">
        	<div class="col-md-6">
        		<form method="post" action="{{ url('groups') }}">
        			@csrf
		        	<div class="form-group">
		        		<label for="title">Group Title</label>
		        		<input type="title" name="title" id="title" class="form-control" placeholder="User Group Title">
		        		<small class="form-text text-muted">title of users group</small>
		        	</div>
		        	<button  type="submit" class="btn btn-primary">Submit</button>
       			 </form>
        	</div>
        </div>
    </div>
</div>


@stop 