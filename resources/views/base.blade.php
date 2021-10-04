<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <title>Inventory</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <h1 class="text-light">Inventory</h1>
    <form class="d-flex">
      <ul class="navbar-nav">
        <a class="btn btn-outline-light ms-2" href="{{ url('/login') }}">Login</a>
        <a class="btn btn-outline-light ms-2" href="{{ url('/register') }}">Register</a>
      </ul>
    </form>
  </div>
</nav>
@if (session('Error'))
  <div class="alert alert-danger">
    <div class="container">
      {{ session('Error') }}
    </div>
  </div>
@endif
@if (session('Message_Info'))
  <div class="alert alert-warning">
    <div class="container">
      {{ session('Message_Info') }}
    </div>
  </div>
@endif
@if (session('Message_Success'))
  <div class="alert alert-success">
    <div class="container">
      {{ session('Message_Success') }}
    </div>
  </div>
@endif
@if (session('errors'))
  <div class="alert alert-danger">
    <div class="container">
      Uncatched Errors
      <ul>
        @foreach (session('errors')->all() as $error)
            <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  </div>
@endif
<div class="container">
  @yield('content')
</div>
</body>
</html>