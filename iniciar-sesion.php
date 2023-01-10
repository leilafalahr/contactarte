<?php
require 'handlers/register.php';
require 'handlers/login.php';

//Si le da al botón del registro, se redirige a la página registro.php
if (isset($_POST['registrate'])) {
    header('Location: registro.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactarte</title>
    <!--favicon-->
    <link rel="icon" href="assets/img/favicon-contactarte.ico">
    <!--hoja de estilo utilizada-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--bootstrap links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <!--js links-->
    <script src="assets/js/function.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body class="container-total">
        <div class="vh-100 show" id="sign-in-container">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block container-img">
                                    <img src="assets/img/imagenes_logo/logo_contactarte.png" alt="logo-contactarte" class="img-fluid"  />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex ">
                                    <div class="card-body p-4 p-lg-5 ">

                                        <form method="post" action="iniciar-sesion.php" >
                                            <h2 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar sesión</h2>
                                            <?php
                                            //Si el correo o la contraseña son incorrectos, lo muestra
                                            if(in_array("El email o la contraseña son incorrectos o no existen.", $error_array)) echo  "<p class='mensaje-error'>El email o la contraseña son incorrectos o no existen.</p>";
                                            ?>
                                            <div class="form-outline mb-4">
                                                <input type="email" id="email" class="form-control form-control-lg" name="emailLog"/>
                                                <label class="form-label" for="email">Correo electrónico</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" id="password" class="form-control form-control-lg" name="passwordLog"/>
                                                <label class="form-label" for="password">Contraseña</label>
                                            </div>

                                            <div class="pt-1 mb-4">
                                                <button class="btn btn-dark btn-lg btn-block" type="submit" name="sign-in">Entrar</button>
                                                <p class="mb-5 pb-lg-2 already-account">¿Todavía no tienes cuenta?

                                                <form method="post">
                                                    <button id="sign-up-button" class="btn btn-secondary" type="submit" name="registrate">Regístrate</button>
                                                </form>
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
