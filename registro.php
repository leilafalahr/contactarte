<?php
require 'handlers/registrohandler.php';
require 'handlers/iniciosesionhandler.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactarte</title>
    <script src="js/function.js"></script>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<div class="contenedor">
    <div class="contenedorIniciarSesion">
        <div class="form">
            <form method="post" action="registro.php" class="register-form">
                <input type="email" name="emailLog" placeholder="E-mail" required/>
                <input type="password" name="passwordLog" placeholder="Contraseña" required/>
                <input type="submit" name="iniciarsesion" value="iniciar sesion"/>
                <p class="registrarse">¿Todavía no tienes cuenta? <a href="#">Regístrate</a></p>
            </form>
    </div>
    <div class="contenedorRegistro">
        <div class="form">
            <form method="post" action="registro.php" class="register-form">
                <input type="text" name="nombre" placeholder="Nombre" value="<?php
                if(isset($_SESSION['nombre'])) {
                    echo $_SESSION['nombre'];
                }
                ?>" required>

                <input type="text" name="apellido" placeholder="Apellido" value="<?php
                if(isset($_SESSION['apellido'])) {
                    echo $_SESSION['apellido'];
                }
                ?>" required>
                <input type="text" name="username" placeholder="Username" value="<?php
                if(isset($_SESSION['username'])) {
                    echo $_SESSION['username'];
                }
                ?>" required>
                <input type="email" name="email" placeholder="E-mail" value="<?php
                if(isset($_SESSION['email'])) {
                    echo $_SESSION['email'];
                }
                ?>" required>
                <br>
                <input type="password" name="password" placeholder="Contraseña"
                    value="<?php
                    if(isset($_SESSION['password'])) {
                        echo $_SESSION['password'];
                    }
                    ?>" required>
                <input type="password" name="password2" placeholder="Repita contraseña"
                    required>
                            <input type="radio" name="tipoUsuario" value="artista"
                                checked>
                            <label for="Artista">Artista</label>
                            <input type="radio" name="tipoUsuario" value="reclutador">
                            <label for="reclutador">Reclutador</label>
                <input type="submit" name="registrar" value="registrarse">
                <p class="iniciarSesion">¿Ya estás registrado? <a href="#">Inicia sesión</a></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>