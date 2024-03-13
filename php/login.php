<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../login-tec/src/output.css" rel="stylesheet">
  <link href="../login-tec/src/estilos.css" rel="stylesheet">
  <link rel="stylesheet" href="../src/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/7f04a31559.js" crossorigin="anonymous"></script>
</head>

<body>
    <img class="wave" src="../img/wave.png">
        <div class="container">
            <div class="img">
                <img src="../img/Imagen2.png">
            </div>
            <div class="login-content">
                <form method="post" action="">
                    <div class="flex items-center justify-center">
                        <img class="" src="../img/avatar.svg">
                    </div>
                    <h2 class="title">BIENVENIDO</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Usuario</h5>
                            <input id="usuario" type="text" class="input" name="usuario">
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Contraseña</h5>
                            <input type="password" id="input" class="input" name="password">
                        </div>
                    </div>
                    <div class="view">
                        <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
                    </div>
                    <div class="text-center">
                        <a class="font-italic isai5" href="">Olvidé mi contraseña</a>
                    </div>
                    <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">

                </form>
            </div>
        </div>

        <script src="js/fontawesome.js"></script>
        <script src="js/main.js"></script>
        <script src="js/main2.js"></script>
        <script src="js/jquery.min.js"></script>
</body>

</html>