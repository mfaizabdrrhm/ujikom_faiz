<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Kasir</title>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<body>
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
        .qmi{
            color: #ffffff;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin: 10px;
        }
        
    </style>
    <form action="tambah_pro" method="POST" enctype="multipart/form-data">
        @method("POST")
        @csrf
    
    <p>Tambah Produk</p>
    <div class="qmi">
 
    <label>Nama Produk</label><br>
    <input name="NamaProduk" type="text"id="NamaProduk">
    <br><br>
    <label>Harga</label><br>
    <input name="Harga" type="text"id="Harga">
    <br><br>
    <label>Stok</label><br>
    <input name="Stok" type="text"id="Stok">
    <br><br>
</div>
<div class="container">
<a href="{{url('home')}}"><button type="button" class="btn btn-secondary">Kembali</button</a>
<button type="submit" class="btn btn-info" style="margin-left:15px;">Tambah</button>
</form>
</div>
</body>
</html>