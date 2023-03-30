<?php

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Página Vulnerable</title>

  <style>
    :root {
      --col1: #ff6600;
      --col2: #ffffff;
      --col3: #000000;
      --col4: #f6f6ef;
      --dark1: #828282;
    }

    *,
    *::after,
    *::before {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    html,
    body {
      width: 100%;
      min-height: 100vh;
      background-color: var(--col4);
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .ccontainer {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      margin-top: 50px;
    }

    .navbar {
      background: var(--col3);
    }

    img {
      width: 70%;
      border-radius: 5px;
      box-shadow: 5px 5px 5px 2px var(--dark1);
    }

    .display-5 {
      font-size: 30px;
    }

    .display-6 {
      font-size: 40px;
    }

    .display-text {
      font-size: 21px;
    }

    .display-date {
      font-size: 18px;
    }
    .session {
      color: var(--dark1);
      text-decoration: none;
      margin: 10px;
    }

    

  </style>

</head>

<body>

  <body>

    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php $_SERVER['PHP_SELF']?>/">Página Vulnerable</a>
    </nav>
    <div class="ccontainer d-flex justify-content-center align-items-center">
    <h2 class="display-4">Regístrate en nuestra página</h2>
    <p class="text-center">No aceptamos carácteres especiales en los nombres de usuario ni en las contraseñas</p>
    <form action="<?php $_SERVER['PHP_SELF']?>/registro" method="post" class="d-flex flex-column" autocomplete="off">
        <input type="text" name="userdata[name]" placeholder="Nombre" class="form-control-lg mt-5 mb-2 text-center rounded rounded-pill">
        <input type="password" name="userdata[passwd]" placeholder="Contraseña" class="form-control-lg my-1 text-center rounded rounded-pill">
        <button class="btn btn-dark mt-4 rounded rounded-pill" type="submit">Enviar</button>
    </form>

    <?php
        if (isset($msg) && $msg !== ""){
             print_r(  $msg );   
        }
    ?>

    </div>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>