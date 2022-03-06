@extends('layout.main')

@section('main_content')

 
<div class="row clearfix mb-3">
    <div class="col-md-6">
        <h2>Users</h2>
    </div>
    <div class="col-md-6 text-right">
        <a href="{{ url('users/create') }}" class="btn btn-primary"> <i class="fa fa-plus"></i> New User</a>
    </div>
</div>

 <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User List:</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Group</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Group</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th class="text-right">Action</th>
                    </tr>
                </tfoot>
                <tbody>
               		@foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->group_id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td class="text-right">
                            <form method="post" action="{{ url('users/'.$user->id)}}">

                                <a href="{{ route('users.edit', ['user'=>$user->id]) }}" class="btn btn-primary btn-sm" title="edit">
                                   <i class="fa fa-edit"></i>
                                </a>
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure ?')" type="submit" class="btn btn-danger btn-sm" title="delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop