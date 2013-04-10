$(function(){
	$("#region_bcli").change(function(e){
		
		var id = e.currentTarget.value
		var caso = 1;
		$.ajax({beforeSuccess:function(){$("#comuna_bcli").html('<option value="">Actualizando!</option>');},url:'http://'+window.location.host+'/app_beta/clientes/ajax/',type:'post',
				data:"id="+id+"&case="+caso, success:function(result){
					$("#comuna_bcli").html(result);
					mostrar_clientes(id, 'region')
				}})
	})

	$("#comuna_bcli").change(function(e){
		var id = e.currentTarget.value
		mostrar_clientes(id, 'comuna')		
	})
})

function mostrar_clientes(id, tipo)
{
	$.ajax({
		beforeSuccess:function(){$("#clientes_bcli").html('Actualizando!');},
		url:'http://'+window.location.host+'/app_beta/clientes/ajax/',
		type:'post',
		data:"id="+id+"&tipo="+tipo+"&case=2", 
		success:function(result){
					$("#clientes_bcli").html(result);
				}})
}