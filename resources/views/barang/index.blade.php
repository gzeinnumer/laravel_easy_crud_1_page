<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row p-2">
      @include('barang.add')
      @include('barang.edit')
    </div>
    <div class="row">

      @if(session('sukses'))
      <div class="alert alert-success" role="alert">
          {{session('sukses')}}
      </div>
      @endif
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody> 
          @foreach($data as $d) 
          <tr>
            <th scope="row">{{$d->id}}</th>
            <td>{{$d->name}}</td>
            <td>{{$d->type}}</td>
            <td>{{$d->created_at}}</td>
            <td>{{$d->updated_at}}</td>
            <td>
              <a href="#" class="btn btn-info btn-sm">Info</a>
              <a href="/barang/find/{{$d->id}}" class="btn btn-warning btn-sm">Edit</a>
              <a href="/barang/delete/{{$d->id}}" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr> 
          @endforeach 
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>