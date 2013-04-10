<div class="span9">

	<div class="tabbable"> 
	  <ul class="nav nav-tabs">
	    <li class="active"><a href="#tab1" data-toggle="tab">Buscar clientes :)</a></li>
	    <li><a href="#tab2" data-toggle="tab">Mi Cartera</a></li>
	    <li><a href="#tab23" data-toggle="tab">Mis Gestiones</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane active" id="tab1">
	      <table class="table table-striped">
	      	<tr>
	      		<td>Región:</td>
	      		<td>
	      			<select id="region_bcli">
	      				<option value="">--</option>
	      				<?php foreach($regiones as $reg): ?>
	      				<option value="<?php echo $reg['id'] ?>"><?php echo $reg['nombre'] ?> (<?php echo $reg['total'] ?>)</option>
	      			<?php endforeach; ?>
	      			</select>
	      		</td>
	      		<td>Comuna:</td>
	      		<td>
	      			<select id="comuna_bcli">
	      				<option>--</option>
	      			</select>
	      		</td>
	      	</tr>
	      </table>
	      	<div id="clientes_bcli"></div>
	    </div>
	    <div class="tab-pane" id="tab2">
	      <p>Howdy, I'm in Section 2.</p>
	    </div>
	    <div class="tab-pane" id="tab2">
	      <p>Howdy, I'm in Section 2.</p>
	    </div>
	  </div>
	</div>

</div>

<!--END ROW-->
</div>
<!--END CONTAINER-->
</div>
