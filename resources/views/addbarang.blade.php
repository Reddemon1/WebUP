<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form action="addbarang" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="text" name="id" id="id" placeholder="id"><br>
        <input type="text" name="namabarang" id="namabarang" placeholder="nama"><br>
        <input type="number" name="stock" id="stock" placeholder="stock"><br>
        <input class="" type="file" name="img_barang" id="formFile"><br>
        <input type="submit" value="Submit">
    </form>
    @foreach ($tbbarang as $model)
    <div>
        <img width="100px" height="100px" src="{{ asset('storage/'.$model->img_barang) }}" alt="">
        <h5>{{ $model->namabarang }}</h5>
        <h5>{{ $model->stock }}</h5>
    </div>        
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>