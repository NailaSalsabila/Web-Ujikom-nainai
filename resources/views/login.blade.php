
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <title>Login</title>
    <style>
      body {
        background-image: url(https://images.pexels.com/photos/1028542/pexels-photo-1028542.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);
      }
      form {
        background-color: rgb(255, 255, 255);
        position: absolute;
        left: 50%;
        top: 60%;
        width: 350px;
        transform: translate(-50%, -50%);
      }
      h1 {
        position: relative;
        text-align: center;
      }
      a {
        position: relative;
        text-align: center;
      }
    </style>
  </head>
  <body>
  
    @include('template.nav')
    
    <form class="p-3">
      <h1>Login</h1>
      <hr />
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email atau nomor telepon:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email atau nomor telepon" />
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password:</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-warning">Login</button>
        <a class="ml-5" href="#">Lupa Kata Sandi?</a>
        <hr />
        <button type="submit" class="btn shadow-sm"><i class="bi bi-google"></i> Google</button>
        <button type="submit" class="btn btn-primary"><i class="bi bi-facebook"></i> Facebook</button>
        <a href="">Daftar</a>
      </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
