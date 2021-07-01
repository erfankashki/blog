@extends('client.layout')
@section('header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>

    <ul class="navbar-nav navbar-right mt-2 mt-lg-0">
      @auth
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <li class="nav-item " style="margin: 10px 10px"><button class="btn btn-link"><span class="glyphicon glyphicon-log-out"></span>logout</a></button></li>
      </form>
      @else
        <li class="nav-item" style="margin: 10px 10px"><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>   Sign Up  </a></li>
        <li class="nav-item " style="margin: 10px 10px"><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>  Login  </a></li>
      @endauth

      </ul>
</nav>

  
@endsection