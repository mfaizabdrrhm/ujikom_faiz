<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENJUALAN</title>
</head>
<link rel="stylesheet" href="bs/css/bootstrap.min.css">
<body>
<style>
    p{
        text-align: center;
        font-size: 40px;
        font-family: 'Times New Roman', Times, serif;
        color: #ffffff;
    
    }
    body{
        background-color: darkred;
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
  <img src="storage/aden.png" alt=""width="70" height="60">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{url('halaman')}}">Home</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('home')}}">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('pelanggan')}}">Pelanggan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('tambah_penjualan')}}">Tambah Penjualan</a>
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

<p>Data Penjualan</p>
<div class="container">
<table class="table table-danger">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Harga</th>
      <th scope="col">Id Pelanggan</th>
      <th scope="col">Opsi</th>
    </tr>
    
  </thead>
  <tbody>
  @foreach ($penjualan as $penjualan)
    <tr>
      <td>{{$penjualan->PenjualanID}}</td>
      <td>{{$penjualan->TanggalPenjualan}}</td>
      <td>{{$penjualan->TotalHarga}}</td>
      <td>{{$penjualan->PelangganID}}</td>

      
      <td><a href="{{url('detail')}}"><button type="button" class="btn btn-primary"><img src="storage/detail.png" alt=""width="40" height="30"></button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>