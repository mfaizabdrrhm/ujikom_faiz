<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <title>PEN</title>
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
        p1{
        font-size: 30px;
        font-family: 'Times New Roman', Times, serif;
        color: #ffffff;
        }
        body{
          background-color: darkred;
        }
        .qmi{
            color: #ffffff;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        select{
          width: 200px;
          padding: 10px;
        }
        input{
          width: 200px;
          padding: 10px;

        }
        
    </style>
        <p>Tambah Produk</p>
    <form action='{{url("/tambah_penjualan") }}' method="post">
      @method('POST')
      @csrf
    <p1>Produk</p1><br>
    <input type="hidden" name="idPenjualan" value="{{$idPenjualan}}"/>
        <select name="form-select" aria-label="Default select example" name="produk">
          
            <option selected>Product</option>
      {!--
        
        {"ProdukID":6,"NamaProduk":"granita","Harga":2000,"Stok":1}
        
        --}
    

    @foreach($produk as $produk)
  <option value="{{$produk->ProdukID}}">{{$produk->NamaProduk}}</option>
  @endforeach
</select><br><br>
<input type="number" name="qty" min="1" max="100" />
<br><br>
<button type="submit" class="btn btn-warning">Add</button>
<br>
<br>
<br>
<p1>Pelanggan</p1><br>
<select   aria-label="Default select example" name="pelanggan">
          <option selected>Pelanggan</option>

  @foreach($pelanggan as $pelanggan)
<option value="{{$pelanggan->PelangganID}}">{{$pelanggan->NamaPelanggan}}</option>
@endforeach
</select>
</body>
</html>