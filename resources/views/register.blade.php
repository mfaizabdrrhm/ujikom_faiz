<!DOCTYPE HTML>
<html>
    <head>
        <title>DAFTAR</title>
        <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    </head>
    <style>
  body{
    background-color: darkred;
  }
    .daftar{
      text-align: center; 
    border: 3px solid gray;
    background-color: pink;
    width: 300px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
    border-radius: 10px;
      }
      h2{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      }
      select{
        width: 190px;
      }

</style>
    <body>
        <div class="daftar">
          <h2>Registrasi</h2>
            <form method="POST" action="register"> 
              @method('POST')
              @csrf
                <input name="tujuan" type="hidden" value="Daftar" >
                <div class="Daftar">
              
                <label>Nama</label>
                <br>
                <input name="nama" type="text" required >
                <br>
                <label>Username</label>
                <br>
                <input name="username" type="text" required >
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password" required >
                <br>
                <label>Telp</label>
                <br>
                <input name="telp" type="telp" required >
                <br>
                <label>Level</label>
                <br>
                 <select name="level">
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                  </select>
                  <br>
                  <br>
                <button type="submit" class="btn btn-outline-dark">Registrasi</button>
                <a href="{{url('login')}}"><button type="button" class="btn btn-outline-dark">Kembali</button></a>
    </form>
    </body>
    </html>