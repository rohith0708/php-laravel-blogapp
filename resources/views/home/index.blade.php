<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href = "style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
<!-- nav start-->
<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #0EABE5;"> -->
<nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">

<div class="container-fluid">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="">contact</a>
        </li> -->
        @if (Route::has('login'))
        @auth
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/dashboard')}}">{{ Auth::user()->name }}</a>
        </li>

        @else


        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="{{ route('login') }}">login</a>
        </li>
        @endauth
        @endif
      </ul>
    </div>
  </div>
</nav>
<!-- navend -->


@foreach($post as $post)

<div class ="divdesign" >


    <label>{{$post->username}}</label>
    <p>{{$post->description}}</p>
    <img src="post/{{$post->image}}" height="400px" width="100%">
</div>
@endforeach

</body>
</html>