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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/function.js"></script>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <?php

    if(isset($_POST['registrar'])) {
        echo '
		<script>

		$(document).ready(function() {
			$("#first").hide();
			$("#second").show();
		});

		</script>

		';
    }


    ?>

</head>
<body>
<div class="contenedor-total">
        <div class="contenedor-tabla-1">
        <table class="tabla1">
            <tr>
                <td><img src="images/logo_contactarte.png" alt=""></td>
                <td>
                    <?php
                    //mostrar errores
                    if(in_array("El email o la contraseña son incorrectos", $error_array)) echo  "<p class='error'>El email o la contraseña son incorrectos.</p>";
                    ?><div class="contenedorIniciarSesion">
                    <div class="form">
                        <form method="post" action="registro.php" class="register-form">
                            <input type="email" name="emailLog" placeholder="E-mail" required/>
                            <input type="password" name="passwordLog" placeholder="Contraseña" required/>
                            <button type="submit" name="iniciarsesion">Iniciar sesion</button>
                        </form>
                    </div>
                        <div class="sincuenta">
                            <center><p><h4>¿Todavia no tienes cuenta?</h4></p>
                            <button class="registrate"">Registrate</button>
                            </center>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        </div>
        <div class="contenedor-tabla-2">
        <table class="tabla2">
            <tr>
                <td> <div class="contenedorRegistro">
                        <div class="form">
                            <?php
                            //mostrar errores
                            if(in_array("El correo electrónico ya está en uso.", $error_array)) echo  "<p class='error'>El correo electrónico ya está en uso.</p>";
                            if(in_array("El username ya está en uso.", $error_array)) echo  "<p class='error'>El username ya está en uso.</p>";
                            if(in_array("Las contraseñas no coinciden.", $error_array)) echo  "<p class='error'>Las contraseñas no coinciden.</p>";
                            if(in_array("Las contraseñas no coinciden.", $error_array)) echo  "<p class='error'>La contraseña tiene que tener entre 20 y 5 caracteres.</p>";
                            ?>
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
                                <input type="submit" name="registrar" value="Registrarse">
                            </form>
                        </div>
                        <div class="sincuenta">
                            <center><p><h4>¿Ya tienes cuenta?</h4></p>
                                <button class="inicia"">Inicia sesion</button>
                            </center>
                        </div>
                    </div></td>
                <td><img src="images/logo_contactarte.png" alt=""></td>
            </tr>
        </table>
        </div> <!--contenedor tabla 2-->
</div><!--contenedor total -->
</div>
</body>
</html>