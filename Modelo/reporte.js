
$(document).ready(function(){

	console.log("jq 4");
		Mostrar();
		Events();
	function Events(){
		$('#sg_documento').hide();
	}
	
	$(document).on('click','.imprimir_reporte',function(e){
		//window.location.href="../reportes/histograma.php";
		var id_curso=$('#id_cur').val();
		var data={
			id_curso:$('#id_cur').val(),
			action: "Histograma"
		}
		
		//Histograma
		$.ajax({

			url: '../../Controlador/controladorReporte.php',
			type: 'POST',
			data: data,
		})
		.done(function(response) {
			if(response == '1'){			
			window.location.href="../reportes/histograma.php?id="+id_curso;
			}else{
				$('#seleccione_curso').html(response);
			}
		})
		e.preventDefault();
	});
	//total alumnos 
	$('#id_cur').on('change',function(){
		//$('#seleccione_curso').html('');
		var dato={
			id_curso: $('#id_cur').val(),
			action: "Info"
		};
		$.ajax({
			url: '../../Controlador/controladorReporte.php',
			type: 'POST',
			cache: false,
			data: dato,
			dataType: "json",
		})

		.done(function(response) {
			//var dat = JSON.parse(response)	
			//console.log(response);
			$('#total_alumno').html(response.total);
			$('#curso_reporte').html(response.curso);
			
		})
	});
	//total alumnos aprobados
	$('#id_cur').on('change',function(){
		var dato={
			id_curso: $('#id_cur').val(),
			action: "Aprobado",
			cache: false,
		};
		$.ajax({
			url: '../../Controlador/controladorReporte.php',
			type: 'POST',
			dataType: "json",	
			data: dato,
		})
		.done(function(response) {
			//var dat = JSON.parse(response)	
			console.log(response);
			$('#aprobado_alumno').html(response.aprobado);
			//$('#curso_tabla').html(response.curso);
			
		})
	});
	//total alumnos desaprobados
	$('#id_cur').on('change',function(){
		var dato={
			id_curso: $('#id_cur').val(),
			action: "Desaprobado",
			cache: false,
		};
		$.ajax({
			url: '../../Controlador/controladorReporte.php',
			type: 'POST',
			dataType: "json",	
			data: dato,
		})
		.done(function(response) {
			//var dat = JSON.parse(response)	
			$('#desaprobado_alumno').html(response.desaprobado);
			//$('#curso_tabla').html(response.curso);
			
		})
	});




	//mostrar curso
	$('#id_curso').on('change',function(){
		var dato={
			id_curso: $('#id_curso').val(),
			action: "Info_Curso",
			cache: false,
		};
		//	console.log(dato)
		$.ajax({
			url: '../../Controlador/controladorReporte.php',
			type: 'POST',
			dataType: "json",	
			data: dato,
		})
		.done(function(response) {
			//var dat = JSON.parse(response);
			$('#curso_tabla').html(response.curso);
			
		})
	});
		//mostrar total de enviados
	$('#id_curso').on('change',function(){
		var dato={
			id_curso: $('#id_curso').val(),
			action: "Info_enviado",
			cache: false,
		};
		//	console.log(dato)
		$.ajax({
			url: '../../Controlador/controladorReporte.php',
			type: 'POST',
			dataType: "json",	
			data: dato,
		})
		.done(function(response) {
			//var dat = JSON.parse(response);
			$('#total_enviado').html(response.total_enviado);
			
		})
	});




		function Mostrar(){
	$('#id_curso').on('change',function(){
		//console.log(this.value);
		var dato={
			id_curso: $('#id_curso').val()
		}
	$.ajax({
			url: '../reportes/view_notas_reporte.php',
			type: 'POST',
			data: dato,
		})
		.done(function(response) {
			$('#report_list').html(response);
			
		})
	});

		}

	$(document).on('click','.send_nota',function(){
		var data=$(this).attr("id");
		$.ajax({
			url: '../../Controlador/controladorReporte.php',
			type: 'POST',
			data: {id:data,action:"Send_Nota"},
		})
		.done(function(response) {
			if(response == '1'){
				Mostrar();
				Check();
			}else{
				console.log(response);
			}
		})

		
	});
			


		

		



})