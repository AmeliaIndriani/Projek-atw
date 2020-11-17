<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

<link rel="stylesheet" href="{{url('public')}}/bootstrap/css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <div class="card">
      <div class="card-body">
        <h3> {{$produk->nama}}</h3>
        <hr>
        <p> Rp. {{number_format ($produk->harga)}} |
            stok : {{$produk->stok}} |
            berat : {{$produk-> berat}} gr
        </p>
        <p>
            {!! nl2br ($produk->deskripsi) !!}
        </p>
        <a class="btn btn-dark"href="{{url('home')}}">Kembali</a>
      </div>
    </div>
  </div>
  
</body>
</html>