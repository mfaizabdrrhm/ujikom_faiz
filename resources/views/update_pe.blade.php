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
          background-color: darkcyan;
        }
    </style>
    <p>Update Pelanggan</p>
    <form action={{url("/update_pelanggan/$pelanggan->PelangganID")}} method="POST" enctype="multipart/form-data">
      @method('POST')
      @csrf
 
    <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Nama</label>
  <br>
  <textarea name="NamaPelanggan"rows="2" cols="30" minlength="1" maxlength="10">{{$pelanggan->NamaPelanggan}}</textarea>

 <br>
  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
  <br>
  <textarea name="Alamat"rows="2" cols="30" minlength="1" maxlength="10">{{$pelanggan->Alamat}}</textarea>
 <br>
  <label for="exampleFormControlTextarea1" class="form-label">Nomor Telepon</label>
  <br>
  <textarea name="NomorTelepon"rows="2" cols="30" minlength="1" maxlength="10">{{$pelanggan->NomorTelepon}}</textarea>
 
<div class="container">
<a href="{{url('pelanggan')}}"><button type="button" class="btn btn-secondary">Kembali</button</a>
<button type="submit" class="btn btn-info" style="margin-left:15px;">Update</button>
</div>
</body>
</html>