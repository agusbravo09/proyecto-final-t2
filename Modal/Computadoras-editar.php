<!-- MODAL EDITAR -->
<div class="modal fade" id="editmodal<?php echo $row['NUMPC']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form action="SQL/Update-PC.php" method="POST" autocomplete="off">
                <input type="hidden" maxlength="3" class="form-control mb-3" name="numpc" value="<?php echo $row['NUMPC'] ?>">
                <input type="hidden" maxlength="8" class="form-control mb-3" name="documento" value="<?PHP echo $row['DNI']?>">
                <label for="marca"><b>Marca de la PC</b></label>
                <input type="text" class="form-control mb-3" name="marca" value="<?PHP echo $row['MARCA']?>">
                <label for="procesador"><b>Procesador</b></label>
                <input type="int" class="form-control mb-3" name="procesador" value="<?php echo $row['PROCESADOR']?>">
                <label for="memoria"><b>Memoria RAM</b></label>
                <input type="int" class="form-control mb-3" name="memoria" value="<?php echo $row['MEMORIA']?>">
                <label for="disco"><b>Almacenamiento</b></label>
                <input type="text" class="form-control mb-3" name="disco" value="<?php echo $row['DISCO']?>">
                <label for="mother"><b>Placa Madre</b></label>
                <input type="text" class="form-control mb-3" name="mother" value="<?php echo $row['MOTHERBOARD']?>">
                <label for="grafica"><b>Fuente de Alimentación</b></label>
                <input type="text" class="form-control mb-3" name="fuente" value="<?php echo $row['FUENTE']?>">
                <label for="grafica"><b>Tarjeta Gráfica</b></label>
                <input type="text" class="form-control mb-3" name="grafica" value="<?php echo $row['GRAFICA']?>">
                <label for="observaciones"><b>Observaciones</b></label>
                <input type="text" class="form-control mb-3" name="observaciones" value="<?php echo $row['OBSERVACIONES']?>">
                <label for="fecha"><b>Fecha de Ingreso</b></label>
                <input type="date" class="form-control mb-3" name="fecha" value="<?php echo $row['FECHA']?>">
                <label for="estado"><b>Estado</b></label>
                <select class="form-control mb-3" name="estado">
                                <option hidden value="<?php echo $row['ESTADO']?>" selected><?php echo $row['ESTADO']?></option>
                                <option value="Sin Diagnosticar">Sin Diagnosticar</option>
                                <option value="Diagnosticada">Diagnosticada</option>
                                <option value="Lista para Retirar">Lista para Retirar</option>
                                <option value="Retirada">Retirada</option>
                            </select>
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