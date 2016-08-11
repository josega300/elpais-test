$(function() {
	function autocompletar() {
		var min_length = 0; // variable length
		var nombre = $('#filtro_pacientes').val();//obtener el nombre y/o termino de busqeuda
		if (nombre.length >= min_length) {
			$.ajax({
				url: '../core/busqueda_pacientes.php',
				type: 'POST',
				data: {nombre:nombre},
				success:function(data){
				$('#lista').show();//mistrar la lista
				$('#lista').html(data);//mostrar resultado de consulta en la lista
				}
			});
		} else {
			$('#lista').hide();
		}
	}

	// funcion que setea valores a los input despues de busqueda
	function set_item(id,item) {
	// setear valor al imput id y nombre
	$('#filtro_pacientes').val(item);
	$('#id').val(id);

	// ocultar la lista
	$('#lista').hide();
	} 
});