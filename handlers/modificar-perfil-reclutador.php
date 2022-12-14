<?php
require ('modificar.php');
?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-xs-6 ">
            <div class="card" id="card" style="width:300px">
                <img class="card-img-top" src="<?= $reclutador['imagen_perfil'] ?>" alt="imagen_perfil">
                <div class="card-body">
                    <h4 class="card-title"> <?=$usuario['nombre']." ".$usuario['apellido']?> (@<?= $reclutador['username']?>)</h4>
                    <span</span>
                    <p class="card-text"><?=$reclutador['descripcion']?></p>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-lg-9 col-xs-6">
            <div>
                <div class="mb-3" id="modificar-perfil">
                    <label for="" class="form-label">Nombre</label>
                    <input class="form-control" type="text" placeholder="<?= $usuario['nombre'] ?>"
                           aria-label="Disabled input example" disabled>
                </div>
                <div class="mb-3" id="modificar-perfil">
                    <label for="" class="form-label">Apellido</label>
                    <input class="form-control" type="text" placeholder="<?= $usuario['apellido'] ?>"
                           aria-label="Disabled input example" disabled>
                </div>
                <form action="modificar-perfil.php" method="post">
                    <div class="mb-3" id="modificar-perfil">
                        <label for="username" class="form-label">Username</label>
                        <input type="username" class="form-control" id="username-mod" name="username-mod"
                               placeholder="@<?= $usuario['username'] ?>">
                    </div>
                    <div class="mb-3" id="modificar-perfil">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email-mod" name="email-mod"
                               placeholder="<?= $usuario['email'] ?>">
                    </div>
                    <div class="mb-3" id="modificar-perfil">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password-mod" name="password-mod"" placeholder="********">
                    </div>
                    <div class="mb-3" id="modificar-perfil">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion-mod" rows="3"
                                  placeholder="<?= $reclutador['descripcion'] ?>" name="bio"></textarea>
                    </div>
                    <div class="mb-3" id="modificar-perfil">
                        <label for="numtelefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="numtelefono-mod" name="numtelefono-mod"
                               placeholder="<?= $reclutador['num_de_telefono'] ?>">
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary btn-dark" name="guardar-reclutador">Guardar y volver</button>
                        <button type="submit" class="btn btn-secondary btn-dark" name="salir">Salir sin guardar</button>
                        <button type="submit" class="btn btn-secondary btn-dark" name="eliminar-cuenta">Eliminar cuenta</button>
                    </center>
                </form>
            </div>
        </div>
<?php
