<div class="span9">
	
	<div class="tabbable"> <!-- Only required for left/right tabs -->
	  <ul class="nav nav-tabs">
	    <li class="active"><a href="#tab1" data-toggle="tab">Proyectos</a></li>
	    <li><a href="#tab2" data-toggle="tab">Crear Tareas</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane active" id="tab1">
	      <!-- ingreso de proyectos -->
	      <table class="table table-striped">
	      	<tr>
	      		<td>Nombre</td>
	      		<td><input type="text" id="nombre"></td>
	      		<td>Inicio</td>
	      		<td><input type="date" ind="inicio"></td>
	      		<td>Termino</td>
	      		<td><input type="date" ind="termino"></td>
	      	</tr>
	      	<tr>
	      		<td colspan="6"><input type="button" class="btn btn-primary" id="guardar_poyecto" value="Guardar"></td>
	      	</tr>
	      </table>
	    </div>
	    <div class="tab-pane" id="tab2">
	      <!-- creacion de tareas -->
	      <table class="table table-striped">
	      	<tr>
	      		<td>Proyecto: </td>
	      		<td colspan="3">
	      			<select id="proyecto"></select>
	      		</td>
	      	</tr>	
	      	<tr>
	      		<td>Descripción: </td>
	      		<td>
	      			<textarea rows="4">
	      			</textarea>
	      		</td>
	      		<td>Duración: </td>
	      		<td><input type="text" id="tiempo" placeholder="mín"></td>
	      	</tr>
	      	<tr>
	      		<td>Asignado a: </td>
	      		<td colspan="3">
	      			<select id="asignacion"></select>
	      		</td>
	      	</tr>
	      	<tr>
	      		<td colspan="6"><input type="button" class="btn btn-primary" id="guardar_poyecto" value="Guardar"></td>
	      	</tr>
	      </table>

	    </div>
	  </div>
	</div>

</div>
</div>
</div>