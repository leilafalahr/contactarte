<?php
$username = $reclutador['username'];
?>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-xs-6 ">
                <div class="card" id="card" style="width:300px">
                    <img class="card-img-top" src="<?= $reclutador['imagen_perfil'] ?>" alt="imagen_perfil">
                    <div class="card-body">
                        <h4 class="card-title"> <?=$usuario['nombre']." ".$usuario['apellido']?> (@<?= $reclutador['username']?>)</h4>
                        <span</span>
                        <p class="card-text"><?=$reclutador['bio']?></p>
                        <a href="modificar-perfil.php" class="btn btn-dark btn-lg btn-block">Modificar perfil</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-lg-9 col-xs-6">
                <div class="card" id="card">
                    <h2>DESCRIPCIÓN</h2>
                    <?= $reclutador['descripcion']?>
                </div>
                <br>
                <div class="card" id="card">
                    <h2>TELÉFONO</h2>
                    <i class='fas fa-phone' style='font-size:24px'> <?= $reclutador['num_de_telefono']?></i>
                </div>
                <br>
                <div class="card" id="card">
                    <h2>E-MAIL</h2>
                    <?= $usuario['email']?>
                </div>

            </div>
        </div>
    </div>
<?php
