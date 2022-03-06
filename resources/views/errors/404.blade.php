@extends('layout.primary')
@section('page_body')


<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

             <div class="" style="margin-top: 150px;">
                <img src="{{ asset('template/img/404.jpg') }}" style="width:150px;height:150px;border-radius: 10%;">
                 <h1 class="mb-0 mt-3">4 0 4</h1>
                 <p class="mb-0" style="font-size:21px;">page not found</p>
                 <a href="{{ url('/') }}">click here to go to home page</a>
             </div>

        </div>


@stop