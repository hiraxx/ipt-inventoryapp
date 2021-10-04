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
        <a class="btn btn-light ms-2" href="{{ url('/login') }}">Logout</a>
      </form>
    </div>
  </nav>

  <div class="container">

    <div class="mt-2">
      <a href="{{ route('items.create') }}" class="btn float-end btn-primary">New Item</a>
    </div>

    <table class="table table-striped">

      <thead class="text-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>&nbsp;</th>
      </thead>
  
      <tbody>
        @foreach ($items as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->quantity }}</td>
            <td class="text-end">
              <form action="{{ route('items.destroy',$item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a class="text-end btn btn-warning btn-sm" href="{{ route('items.edit',$item->id) }}">Update</a>
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form>
            </td>
        </tr>
        @endforeach
      </tbody>
  
    </table>
  </div>

</body>
</html>