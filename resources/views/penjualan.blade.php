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
        <a class="nav-link" href="#">Produk</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('tambah_pro')}}">Tambah Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('penjualan')}}">Penjualan</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<div class="btn">
    <button type="button" class="btn btn-danger">Logout</button>
    </div>
</nav>
<br>

<p>Data Penjualan</p>
</body>
</html>