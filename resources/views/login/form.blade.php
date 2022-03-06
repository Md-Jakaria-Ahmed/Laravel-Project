@extends('layout.primary')
@section('page_body')


<div class="container my-5">


@if($errors->any())
  <div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
           <li>
               {{ $error }}
           </li>
        @endforeach
    </ul>
  </div>
@endif




    <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
          <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image text-center my-auto" >
                  <img src="{{ asset('template/img/favc.png') }}" style="border-radius: 10%;border:2px solid #ddd;padding: 5px;" >
              </div>
                <div class="col-lg-6">
                   <div class="p-5">
                     <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                        </div>
            <!-- form   -->
        <form method="post" action="{{ route('login.confirm') }}">
   <!-- use here @csrf -->
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control form-control-user"
                    id="emaiil" placeholder="Enter Email Address...">
            </div>

            <div class="form-group">
                <input type="password" class="form-control form-control-user"
                    id="password" placeholder="Password">
            </div>

            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember
                        Me</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
          
        </form>
                      
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


@stop