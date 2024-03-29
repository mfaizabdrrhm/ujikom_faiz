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
    
    }
    body{
        background-color: darkgoldenrod;
    }
    .btn{
      text-align: right;
    }
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse
  
    }
</style>
<nav class="navbar" style="background-color: pink;">
<nav class="navbar navbar-expand-lg ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{url('halaman')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('tambah_pe')}}">Tambah Pelanggan</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('home')}}">Produk</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{url('penjualan')}}">Penjualan</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<div class="btn">
    <a type="button" href="{{url('/logout')}}" class="btn btn-danger">Logout</a>
    </div>
</nav>
<br>
<p>Data Pelanggan</p>
<div class="container">
<table class="table table-danger">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">NoTelp</th>
      <th scope="col">Opsi</th>
    </tr>
    
  </thead>
  <tbody>
  @foreach ($pelanggan as $pelanggan)
    <tr>
      <td>{{$pelanggan->PelangganID}}</td>
      <td>{{$pelanggan->NamaPelanggan}}</td>
      <td>{{$pelanggan->Alamat}}</td>
      <td>{{$pelanggan->NomorTelepon}}</td>
      <td>
      <a href="update_pelanggan/{{$pelanggan->PelangganID}}"><button type="button" class="btn btn-success"><img src="storage/edit.png" alt=""width="40" height="30"></button></a>
      <a href="hapus_pelanggan/{{$pelanggan->PelangganID}}"><button type="button" class="btn btn-danger"><img src="storage/sampah.png" alt=""width="40" height="30"></button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>