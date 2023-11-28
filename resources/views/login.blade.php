<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<link rel="stylesheet" href="bs/css/bootstrap.min.css">
<style>
  body{
    background-color: darkred;
  }
    .alok{
      text-align: center;
    border: 3px solid gray;
    background-color: pink;
    width: 300px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
   
      }
      h1{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      }

</style>
<body>
    
    
    <div class="alok">
    <h1>Login</h1>
    <form action="login" method="POST">
    @method('POST')
    @csrf
    <br>
  
    <label>Email</label>
    <br>
    <input name="username" type="text"id="username">
    <br>
    <label>Password</label>
    <br>
    <input name="password" type="password"id="password">
<br>
<br>
<button type="submit" class="btn btn-outline-dark">Login</button>
<a href="{{url('register')}}"><button type="button" class="btn btn-outline-dark">Registrasi</button></a>
</form>
</div>
</body>
</html>