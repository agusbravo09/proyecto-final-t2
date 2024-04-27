<!-- MODAL ELIMINAR -->
<div class="modal fade" id="eliminarmodal<?php echo $row['NUMPC']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- MODAL HEADER -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Eliminar Registro </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- MODAL BODY -->
            <div class="modal-body">
                ¿Estas seguro de que queres eliminar este registro?
            </div>
            <!-- MODAL FOOTER -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cerrar </button>
                <a class="btn btn-danger btn-block" href="SQL/Eliminar-PC.php?id=<?php echo $row['NUMPC']?>"> Eliminar Registro </a>
            </div>
        </div>
    </div>
</div>