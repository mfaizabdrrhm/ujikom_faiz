<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
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
        }
        
    </style>
    <form action="tambah_pe" method="POST" enctype="multipart/form-data">
        @method("POST")
        @csrf
    
    <p>Tambah Pelanggan</p>
    <div class="qmi">
 
    <label>Nama</label><br>
    <input  type="text"name="NamaPelanggan">
    <br><br>
    <label>Alamat</label><br>
    <input  type="text"name="Alamat">
    <br><br>
    <label>NoTelp</label><br>
    <input  type="text"name="NomorTelepon">
    <br><br>
</div>
<div class="container">
<a href="{{url('home')}}"><button type="button" class="btn btn-secondary">Kembali</button</a>
<button type="submit" class="btn btn-info" style="margin-left:15px;">Tambah </button>
</form>
</div>
</body>
</html>