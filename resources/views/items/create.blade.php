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
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
    <div class="container">
      <h1 class="text-light">Inventory</h1>
      <form class="d-flex">
        <a class="btn btn-light ms-2" href="{{ url('/login') }}">Logout</a>
      </form>
    </div>
  </nav>

  <div class="container">

    <div class="">
      <form action="{{ route('items.store') }}" method="post">
        @csrf

        <div class="mb-3">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="description">Description</label>
          <textarea class="form-control" style="height:70px" name="description" required></textarea>
        </div>

        <div class="mb-3">
          <label for="price">Price</label>
          <input type="number" name="price" id="price" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="quantity">Quantity</label>
          <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>

        <div class="row">
          <div class="col">
            <button class="btn btn-primary form-control" type="submit">Create</button>
          </div>
          <div class="col">
            <a class="btn btn-danger form-control" href="{{ route('items.index') }}" type="submit">Cancel</a>
          </div>
        </div>

      </form>
    </div>

  </div>

</body>
</html>