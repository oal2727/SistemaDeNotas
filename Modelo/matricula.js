$(document).ready(function(){
	console.log("jquery 3");
	Mostrar_Matricula();
		Mostrar_Cursos();


	function Mostrar_Matricula(){
		$.ajax({
			url: '../matricula/view_matricula.php',
			type: 'POST',
		})
		.done(function(response) {
			$('#list_matricula').html(response);

		})
		
	};

	function Mostrar_Cursos(){
		$.ajax({
			url: '../../Controlador/controladorCurso.php',
			type: 'POST',
			data: {action: "Mostrar"},
		})
		.done(function(response) {
			$('#curso_item').html(response);
			$('.item_reporte_cursos').html(response);
		})
	};

	$(document).on('click','#agregar_matricula',function(e){
		var param={
			curso_id: $('#curso_item').val(),
			n_doc: $('#documento_matricula').val(),
			action: "Agregar"
		};
		$.ajax({
		url: '../../Controlador/controladorMatricula.php',
		type: 'POST',
		data: param,
		})
		.done(function(response) {
			if(response=="1"){
				$('#addMatricula').modal('hide');
				Mostrar_Matricula();
			}else{
				$('#message_matricula').html(response);
			}
		})
		e.preventDefault();
	});
		$(document).on('click','#update_curso',function(e){
			var parametros={
				id: $('#curso_id').val(),
				descripcion: $('#descripcion_edit').val(),
				siglas: $('#siglas_edit').val(),
				estado : $('#estado').val(),
				action: "Update"
			};
			$.ajax({
			url: '../../Controlador/controladorCurso.php',
			type: 'POST',
			data: parametros,
			})
			.done(function(data) {
				if(data == 1){
					$('#EditCursoModal').modal('hide');
					Mostrar_Cursos();
				}else{
					$('#message_edit_curso').html(data);
				}
				
				
			})
	
		e.preventDefault();
	});
	$(document).on('click','.add_nota',function(){
		var id=$(this).attr("id");
			$.ajax({
				url: '../../Controlador/controladorMatricula.php',
				type: 'POST',
				dataType: 'json',
				data: {id:id,action:"Read"},
			})
			.done(function(response) {
				$('#id_matricula').val(response.id);
				$('#nota1').val(response.n1);
				$('#nota2').val(response.n2);
				$('#nota3').val(response.n3);
				$('#nota4').val(response.n4);
				$('#addNotaMatricula').modal('show');
			})
		
	});

	$(document).on('click','#agregar_nota',function(e){
		var param={
			id: $('#id_matricula').val(),
			nota1: $('#nota1').val(),
			nota2: $('#nota2').val(),
			nota3: $('#nota3').val(),
			nota4: $('#nota4').val(),
			action: "Update"
		};
		$.ajax({
			url: '../../Controlador/controladorMatricula.php',
			type: 'POST',
			data:param,
		})
		.done(function(response) {
			if(response == '1'){
					$('#addNotaMatricula').modal('hide');
					Mostrar_Matricula();

			}else{
				$('#message_nota').html(response);
			}
		})
		e.preventDefault();
		
	})


	

	
	



})