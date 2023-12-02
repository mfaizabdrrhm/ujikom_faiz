<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>

<body>
<link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
<style>
        p{
        text-align: center;
        font-size: 40px;
        font-family: 'Times New Roman', Times, serif;
        color: #ffffff;
        background-color: pink;
        }
        body{
          background-color: darkred;
        }
    </style>
    <p>Update Produk</p>
    <form action={{url("/update_produk/$produk->ProdukID")}} method="POST" enctype="multipart/form-data">
      @method('POST')
      @csrf
 
    <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Nama Produk</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"name="Nama_Produk">{{$produk->NamaProduk}}</textarea>
  @error('NamaProduk')
      <div>{{$message}}</div>
  @enderror
  <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"name="Harga">{{$produk->Harga}}</textarea>
  @error('Harga')
      <div>{{$message}}</div>
  @enderror
  <label for="exampleFormControlTextarea1" class="form-label">Stok</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"name="Stok">{{$produk->Stok}}</textarea>
  @error('Stok')
      <div>{{$message}}</div>
  @enderror
<div class="container">
<a href="{{url('home')}}"><button type="button" class="btn btn-secondary">Kembali</button</a>
<button type="submit" class="btn btn-info" style="margin-left:15px;">Update</button>
</div>
</body>
</html>