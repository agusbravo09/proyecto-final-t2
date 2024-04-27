<!-- MODAL EDITAR -->
<div class="modal fade" id="editmodal<?php echo $row['DNI']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- MODAL HEADER -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Editar Registro </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- MODAL BODY -->
            <div class="modal-body">
                <form action="SQL/Update.php" method="POST" autocomplete="off">
                <input type="hidden" maxlength="8" class="form-control mb-3" name="documento" value="<?PHP echo $row['DNI']?>">
            <label for="nombre"><b>Nombre y Apellido</b></label>
                <input type="text" class="form-control mb-3" name="nombre" value="<?PHP echo $row['NOMBRE']?>">
            <label for="telefono"><b>Telefóno</b></label>
                <input type="int" class="form-control mb-3" name="telefono" value="<?php echo $row['TELEFONO']?>">
                <label for="celular"><b>Número de Celular</b></label>
                <input type="int" class="form-control mb-3" name="celular" value="<?php echo $row['CELULAR']?>">
                <label for="correo"><b>Correo Electrónico</b></label>
                <input type="text" class="form-control mb-3" name="correo" value="<?php echo $row['MAIL']?>">
                <label for="domicilio"><b>Domicilio</b></label>
                <input type="text" class="form-control mb-3" name="domicilio" value="<?php echo $row['DIRECCION']?>">
            </div>
            <!-- MODAL FOOTER -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cerrar </button>
                <input type="submit"class="btn btn-warning btn-block" value="Editar Registro">
                </form>
            </div>
        </div>
    </div>
</div>