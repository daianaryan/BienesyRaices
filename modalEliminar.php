<!-- MODAL ELIMINAR-->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel" style="color: gray; font-size: 14px">Eliminar Propiedad</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>				
			</div>
			<div class="modal-body">
				<div class="text-center"><i class="fas fa-exclamation-triangle fa-3x" style="color: orange"></i></div>
				<br>				
				<h5 class="text-center" style="font-size: 18px">¿Esta seguro que desea eliminar este registro?</h5>
				<p class="text-center" style="color: gray; font-size: 12px">Esta operacion es irreversible</p>
				<!-- Formulario -->
				<form action="eliminar.php" method="GET">
					<input type="hidden" name="id" id="delete_id">
					<div class="modal-footer text-center">
						<button type="button" class="btn btn-outline-danger" style="font-size: 12px" data-bs-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-outline-success" style="font-size: 12px" >Eliminar</button>
					</div>  
				</form>														
			</div>
		</div>
	</div>
</div> <!-- FIN: MODAL ELIMINAR-->