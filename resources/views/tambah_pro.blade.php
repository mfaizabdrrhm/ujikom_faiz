<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH</title>
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
        }
        
    </style>
    <p>Tambah Produk</p>
    <div class="qmi">
 
    <label>Nama Produk</label>
    <input name="username" type="text"id="username">
    <br><br>
    <label>Harga</label>
    <input name="username" type="text"id="username">
    <br><br>
    <label>Stok</label>
    <input name="username" type="text"id="username">
    <br><br>
</div>
<div class="container">
<a href="{{url('home')}}"><button type="button" class="btn btn-secondary">Kembali</button</a>
<button type="button" class="btn btn-info">Tambah</button>
</div>
</body>
</html>