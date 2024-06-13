<?php



?>

<!doctype html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <style >
        .container{
          width: 400px;
          background-color: #fffffb;
          border-radius: 20px;
          padding-top: 10px;
          font-family: 'Poppins';
        }
        .head{
          font-size: 40px;
          font-family: 'Poppins';
          font-weight: 700;
        }
        label{
          font-family: 'Lora';
        }
        .above{
          margin-bottom: 0px;
        }
        .under {
          outline: 0;
          border-width: 0 0 2px;
          border-color: #292f36;
          background-color: #fffffb;
        }
        .under:focus {
          border-color: #ffe45e;
        }
        .btndsgn{
          width: 150px;
          border-radius: 10px;
          background-color: #ff6392;
          color: white;
          font-size: 18px;
        }
    </style>
  </head>
  <body style="background-color: #5aa9e6;">
    <div class="container border mt-5" style="width:400px" >
        <h2 class="head text-center">LOGIN</h2>
        <form method="post" action="http://localhost/codeigniter/public/process/login" class="mx-auto mt-5" style="max-width: 320px">
            <div class="mb-3">
                <label class="form-label above">Username</label>
                <input class="form-control under" type="text" name="username" />
            </div>
            <div class="mb-3">
                <label class="form-label above">Password</label>
                <input class="form-control under" type="password" name="pass" />
            </div>
            <div class="mb-3 text-center">
                <button class="btn btndsgn" type="submit">LOGIN</button>
            </div>
        </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>