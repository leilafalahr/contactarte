<?php
require 'handlers/register.php';
require 'handlers/login.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactarte</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>
<body>
<script>
    $(document).ready(function(){
        $(".contenedor-tabla-2").hide();
        $(".contenedor-tabla-1").show();

        $("#registra").click(function(){
            $(".contenedor-tabla-1").hide();
            $(".contenedor-tabla-2").show();
        });
        $("#inicia").click(function(){
            $(".contenedor-tabla-2").hide();
            $(".contenedor-tabla-1").show()
        });
    });
</script>
<div class="contenedor-total">
        <div class="contenedor-tabla-1">
        <table class="tabla1">
            <tr>
                <td><img src="assets/img/imagenes_logo/logo_contactarte.png" alt=""></td>
                <td>
                    <?php
                    //mostrar errores
                    if(in_array("El email o la contraseña son incorrectos", $error_array)) echo  "<p class='error'>El email o la contraseña son incorrectos.</p>";
                    ?><div class="contenedorIniciarSesion">
                    <div class="form">
                        <form method="post" action="registro.php" class="register-form">
                            <input type="email" class="input" name="emailLog" placeholder="E-mail" required/>
                            <input type="password" class="input" name="passwordLog" placeholder="Contraseña" required/>
                            <button type="submit" name="iniciarsesion">Iniciar sesion</button>
                        </form>
                    </div>
                        <div class="sincuenta">
                          <p><h4>¿Todavia no tienes cuenta?</h4></p>
                            <button class="registrate" id="registra">Registrate</button>
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
                                <input type="text" class="input" name="nombre" placeholder="Nombre" value="<?php
                                if(isset($_SESSION['nombre'])) {
                                    echo $_SESSION['nombre'];
                                }
                                ?>" required>

                                <input type="text" class="input" name="apellido" placeholder="Apellido" value="<?php
                                if(isset($_SESSION['apellido'])) {
                                    echo $_SESSION['apellido'];
                                }
                                ?>" required>
                                <input type="text" class="input" name="username" placeholder="Username" value="<?php
                                if(isset($_SESSION['username'])) {
                                    echo $_SESSION['username'];
                                }
                                ?>" required>
                                <input type="email" class="input" name="email" placeholder="E-mail" value="<?php
                                if(isset($_SESSION['email'])) {
                                    echo $_SESSION['email'];
                                }
                                ?>" required>
                                <br>
                                <input type="password" class="input" name="password" placeholder="Contraseña"
                                       value="<?php
                                       if(isset($_SESSION['password'])) {
                                           echo $_SESSION['password'];
                                       }
                                       ?>" required>
                                <input type="password" class="input" name="password2" placeholder="Repita contraseña"
                                       required>
                                <input type="radio" name="tipoUsuario" value="artista"
                                       checked>
                                <label for="artista">Artista</label>
                                <input type="radio" name="tipoUsuario" value="reclutador">
                                <label for="reclutador">Reclutador</label>
                                <button type="submit" name="registrar">Registrarse</button>
                            </form>
                        </div>
                        <div class="sincuenta">
                            <p><h4>¿Ya tienes cuenta?</h4></p>
                                <button class="inicia" id="inicia">Inicia sesion</button>
                        </div>
                    </div></td>
                <td><img src="assets/img/imagenes_logo/logo_contactarte.png" alt=""></td>
            </tr>
        </table>
        </div> <!--contenedor tabla 2-->
</div><!--contenedor total -->
</div>
</body>
</html>