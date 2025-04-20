@extends('layouts.app')
@section('content')
    <main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
      <h2 class="page-title">My Account</h2>
      <div class="row">
        <div class="col-lg-3">
          @include('user.acount-nav')
        </div>
        <div class="col-lg-9">
          <div class="page-content my-account__dashboard">
            <p>Hello <strong>{{Auth::user()->name}}</strong></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur at quam porro vero eveniet totam rem nemo animi
               quae, reprehenderit alias eius ab! Reprehenderit voluptatum quod sed provident consectetur nostrum?</p>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection