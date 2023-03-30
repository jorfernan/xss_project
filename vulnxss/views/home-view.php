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
      font-size: 20px;
    }

    .display-6 {
      font-size: 2rem;
    }
    

    .display-text {
      font-size: 21px;
    }

    .display-date {
      font-size: 1em;
      text-align: center;
    }

    .session {
      color: var(--dark1);
      text-decoration: none;
      margin: 10px;
    }

    
    .comment-data {
      border-right: solid #050505 2px;
    }
  </style>

</head>

<body>

  <body>

    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#Home">Página Vulnerable</a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#Home">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#imágen">Imágen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#formulario">Cuentanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#comentarios">Comentarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/reflected">Concurso</a>
          </li>
        </ul>
        <?php
        if (isset($_SESSION['logged']) && $_SESSION['logged'] === 1 && isset($_SESSION['username']) && $_SESSION['username'] !== '') {

        ?>
          <div class="container float-right">
            <div class="row d-flex justify-content-end">
              <div class="col-3 d-flex justify-content-center align-items-center">
                <p class="session text-white">Bienvenido <?php echo $_SESSION['username']?>!</p>
                <a class="session text-white " href="/salir">Cerrar Sesión</a>
              </div>
            </div>

          </div>
        <?php

        } else { 
        ?>
          <div class="container float-right">
            <div class="row d-flex justify-content-end">
              <div class="col-3">
                <a class="session text-white" href="<?php $_SERVER['PHP_SELF'] ?>/acceso">Iniciar Sesión</a>
                <a class="session text-white " href="<?php $_SERVER['PHP_SELF'] ?>/registro">Regístrate</a>
              </div>
            </div>

          </div>
        <?php
        }

        ?>
      </div>
    </nav>

    <div class="container ccontainer" id="Home">
      <h1 class="text-center display-3 text-dark mb-3">Comparte tu <b>visión</b> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px">
          <path d="M 41 2 C 37.14 2 34 5.14 34 9 C 34 10.845786 34.723158 12.521525 35.894531 13.773438 L 27.525391 24 L 15.919922 24 C 15.432051 20.613417 12.519553 18 9 18 C 5.14 18 2 21.14 2 25 C 2 28.86 5.14 32 9 32 C 12.519553 32 15.432051 29.386583 15.919922 26 L 27.501953 26 L 35.533203 36.638672 C 34.575514 37.836276 34 39.350757 34 41 C 34 44.86 37.14 48 41 48 C 44.86 48 48 44.86 48 41 C 48 37.14 44.86 34 41 34 C 39.512993 34 38.136901 34.470036 37.001953 35.263672 L 29.271484 25.025391 L 37.453125 15.023438 C 38.494969 15.639401 39.704431 16 41 16 C 44.86 16 48 12.86 48 9 C 48 5.14 44.86 2 41 2 z" />
        </svg></h1>
      <p class="text-justify display-text">¡Bienvenido/a a nuestra página de comentarios de imágenes! Aquí podrás compartir tus pensamientos y reflexiones sobre cada imágen que te mostramos semanalmente.
        Cada imagen tiene una historia que contar y queremos conocer tu perspectiva. ¿Qué emociones te evoca la imagen? ¿Qué mensaje crees que transmite? ¿Te recuerda algún momento o experiencia de tu vida?
        Para compartir tus pensamientos, simplemente ingresa tu comentario en el formulario de abajo y envíalo. Al finalizar nuestro periodo de recopilación de vuestra información sobre vuestras opiniones artísticas recibireis acceso exclusivo al modelo de IA que estamos implementando. Todos los comentarios son bienvenidos y apreciados, así que no dudes en compartir lo que piensas.
        ¡Gracias por ser parte de nuestra comunidad!</p>
    </div>

    <div class="container ccontainer" id="imágen">
      <p class="text-center display-5 mb-5"><i>"La soledad puede ser tan luminosa como en las pinturas de Hopper, pero ten cuidado, no todo lo que brilla es oro y a veces las sombras son más profundas de lo que parecen."</i></p>
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/Nighthawks_by_Edward_Hopper_1942.jpg/450px-Nighthawks_by_Edward_Hopper_1942.jpg" alt="Noctámbulos">
    </div>

    <div class="container ccontainer" id="formulario">
      <h1 class="mb-3">¿Qué has sentido al ver la imágen?</h1>
      <form action="/" method="post" class=" d-flex justify-content-center align-items-center p-3">
        <input type="text" name="comentario" class="form-control-lg text-center m-3" placeholder="Alegría, tristeza, etc">
        <button class="btn btn-dark p-2" type="submit">Enviar</button>
      </form>
      <?php
        if (isset($msg) && $msg !== ''){
          print_r($msg);
        }
      ?>
    </div>

    <div class="container ccontainer" id="comentarios">
      <h1 class="mb-5 display-3">Comentarios</h1>
      <?php

      foreach ($comments as $comment) {
      ?>
        <div class="row w-100 comment my-2 p-2 d-flex justify-content-center align-items-center">
          <div class="col-3 comment-data ">
            <div class="row d-flex flex-column justify-content-center align-items-center pr-3 p-2">
              <div class="col display-7 text-left"><?php if ($comment['username'] == 'anon') {
                                                        print_r('Anónimo');
                                                      } else {
                                                        print_r($comment['username']);
                                                      } ?></div>
              <div class="col bg-warning d-flex justify-content-center align-items-center p-1 rounded rounded-pill display-date"><b><?php print_r($comment['date']); ?></b></div>
            </div>

          </div>
          <div class="col-9  d-flex">
            <p class="mt-3 display-6 d-flex  align-items-center">
              <?php print_r($comment['texto']); ?>
            </p>
          </div>
        </div>
      <?php
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