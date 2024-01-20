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
        body{
          background-color: darkred;
        }
        .qmi{
            color: #ffffff;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        
    </style>
        <p>Tambah Produk</p>
    <form action='{{url("/tambah_penjualan") }}' method="post">
        <select name="form-select" aria-label="Default select example" name="produk">
            <option selected>Product</option>
      {!--
        
        {"ProdukID":6,"NamaProduk":"granita","Harga":2000,"Stok":1}
        
        --}
    

    @foreach($produk as $produk)
  <option value="{{$produk->ProdukID}}">{{$produk->NamaProduk}}</option>
  @endforeach
</select>

</body>
</html>