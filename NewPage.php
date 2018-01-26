<?
$ID=$_GET['ID'];
?>
<div class="modal-header">
   <button type="button" class="close" data-dismiss="modal">&times;</button>
   <h2 class="modal-title">Editar usuario</h2>
</div>
<form name="formularioModificaUsuario" method='post' action="usuarios.php">
    <div class="modal-body">
        
    </div>
    <div class="modal-footer">
        <button type="reset" id="cancelar" class="btn btn-danger" data-dismiss="modal" value="reset">
        <img src='../images/cancel.png' width='20px' height='20px'> Cancelar</button>
        <button type="submit" name="submitModifica" id="submit" class="btn btn-primary" value="submit">
        <img src='../images/save_changes.png' width='20px' height='20px'> Guardar cambios</button>
    </div>
</form>
