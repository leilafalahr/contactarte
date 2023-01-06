<?php
require 'handlers/register.php';
require 'handlers/login.php';

if (isset($_POST['inicia'])) {
    header('Location: iniciar-sesion.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    <!--js y query links-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="assets/js/function.js"></script>

</head>
<body class="container-total">
<div class="vh-100" id="sign-up-container">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-7 d-flex ">
                            <div class="card-body p-4 p-lg-5 ">

                                <form method="post" action="registro.php">
                                    <h2 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Regístrate</h2>
                                    <?php
                                    //mostrar errores
                                    if (in_array("El correo electrónico ya está en uso.", $error_array)) echo "<p class='mensaje-error'>El correo electrónico ya está en uso.</p>";
                                    if (in_array("El username ya está en uso.", $error_array)) echo "<p class='mensaje-error'>El username ya está en uso.</p>";
                                    if (in_array("Las contraseñas no coinciden.", $error_array)) echo "<p class='mensaje-error'>Las contraseñas no coinciden.</p>";
                                    if (in_array("Las contraseñas no coinciden.", $error_array)) echo "<p class='mensaje-error'>La contraseña tiene que tener entre 20 y 5 caracteres.</p>";
                                    ?>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="nombre" class="form-control form-control-lg"
                                                       name="nombre" value="<?php
                                                if (isset($_SESSION['nombre'])) {
                                                    echo $_SESSION['nombre'];
                                                }
                                                ?>" required/>
                                                <label class="form-label" for="nombre">Nombre</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="apellido" class="form-control form-control-lg"
                                                       name="apellido" value="<?php
                                                if (isset($_SESSION['apellido'])) {
                                                    echo $_SESSION['apellido'];
                                                }
                                                ?>" required/>
                                                <label class="form-label" for="apellido">Apellido</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="username" class="form-control form-control-lg"
                                                       name="username" value="<?php
                                                if (isset($_SESSION['username'])) {
                                                    echo $_SESSION['username'];
                                                }
                                                ?>" required/>
                                                <label class="form-label" for="username">Username</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="email" id="email" class="form-control form-control-lg"
                                                       name="email" value="<?php
                                                if (isset($_SESSION['email'])) {
                                                    echo $_SESSION['email'];
                                                }
                                                ?>" required/>
                                                <label class="form-label" for="email">E-mail</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" class="form-control form-control-lg"
                                               name="password" value="<?php
                                        if (isset($_SESSION['password'])) {
                                            echo $_SESSION['password'];
                                        }
                                        ?>" required/>
                                        <label class="form-label" for="form2Example27">Contraseña</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form2Example27" class="form-control form-control-lg"
                                               name="password2"/>
                                        <label class="form-label" for="form2Example27">Repita contraseña</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input class="form-check-input" type="radio" name="tipoUsuario"
                                                       value="artista" id="tipoArtista" checked>
                                                <label class="form-check-label" for="tipoArtista">
                                                    Artista
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input class="form-check-input" type="radio" name="tipoUsuario"
                                                       value="reclutador" id="tipoReclutador">
                                                <label class="form-check-label" for="tipoReclutador">
                                                    Reclutador
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit" name="sign-up" onclick="mostrarVentana();">
                                            Entrar
                                        </button>
                                </form>
                                <form method="post" class="already-account">
                                    <p>¿Ya tienes una cuenta?
                                        <button id="sign-in-button" class="btn btn-secondary" type="submit" name="inicia">Inicia sesión</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 d-none d-md-block container-img">
                        <img src="assets/img/imagenes_logo/logo_contactarte.png" alt="logo-contactarte"
                             class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</body>
</html>
