<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Kasir</title>
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
  <label for="exampleFormControlTextarea1" class="form-label">NamaProduk</label>
  <br>
  <textarea name="NamaProduk"rows="2" cols="30" minlength="1" maxlength="10">{{$produk->NamaProduk}}</textarea>
  <br>
  <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
  <br>
  <textarea name="Harga"rows="2" cols="30" minlength="4" maxlength="4">{{$produk->Harga}}</textarea>
  <br>
  <label for="exampleFormControlTextarea1" class="form-label">Stok</label>
  <br>
  <textarea name="Stok"rows="2" cols="30" minlength="1" maxlength="100">{{$produk->Stok}}</textarea>
  <br>
<div class="container">
<a href="{{url('home')}}"><button type="button" class="btn btn-secondary">Kembali</button</a>
<button type="submit" class="btn btn-info" style="margin-left:15px;">Update</button>
</div>
</body>
</html>