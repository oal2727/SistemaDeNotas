$(document).ready(function(){
	console.log("jquery here");
	Mostrar_Cursos();

	$(document).on('click','#acceder',function(e){
		var data={
			usuario : $('#user').val(),
			password : $('#password').val(),
			action : "Ingresar"
		};
		$.ajax({
			url: '../Controlador/controladorLogin.php',
			type: 'POST',
			data: data,
		})
		.done(function(response) {
			if(response == '1'){
				window.location.href='../Vista/personas/index_personas.php';
			}else{
				$('#message_form').html(response);
			}

		})
		e.preventDefault();
	});
	//cerrar session
	$(document).on('click','#logout',function(){
		$.ajax({
			url: '../../Controlador/controladorLogin.php',
			type: 'POST',
			data: {action:"Cerrar"},
		})
		.done(function(response) {
				console.log(response);
		})
	});

	//eliminar cuenta usuario
	$(document).on('click','#delete_login',function(){
		console.log("delete");
		$.ajax({
			url: '../Controlador/controladorLogin.php',
			type: 'POST',
			data: {action:"Delete"},
		})
		.done(function() {
			window.location.href="../Vista/login.php";
			//console.log(response);
		})
	});

	//crear usuario
	$('#registrar').on('submit',function(e){
		var formData = new FormData(this);
		 var test= $('#image')[0].files[0];
		 formData.append('file',test);
		 $.ajax({
		 	url: '../Controlador/controladorUser.php',
			type: 'POST',
		 	data: formData,
		 	cache:false,
		 	contentType: false,
            processData: false,
		 })
		 .done(function(response) {
		 	if(response == "1"){
		 		window.location.href='index.php';
		 	}else{
		 		$('#message_sign').html(response);
		 	}
		 	
		 })
		 
		 e.preventDefault();

	});
	//----
	//VIEW CURSO
	function Mostrar_Cursos(){
		$.ajax({
			url: '../cursos/view_curso.php',
			type: 'POST',
		})
		.done(function(response) {
			$('#list').html(response);
		})
		
	};

	//CRUD CURSO
	$(document).on('click','#agregar_curso',function(e){
		//console.log("agregar");
		var parametros={
			descripcion: $('#descripcion_curso').val(),
			siglas: $('#siglas_curso').val(),
			action: "Create"
		};

			$.ajax({
			url: '../../Controlador/controladorCurso.php',
			type: 'POST',
			data: parametros,
			})
				.done(function(response) {
				if(response == "1"){
					$('#addCursoModal').modal('hide');
					Mostrar_Cursos();
				}else{
					$('#message_curso').html(response);
				}
			})
	
		//fin de funcion cerrar
		e.preventDefault();
	});

	//funcion read
		$(document).on('click','.edit_curso',function(e){
			console.log("edit");
			var id = $(this).attr('id');
			console.log(id);
			$.ajax({
			url: '../../Controlador/controladorCurso.php',
			type: 'POST',
			data: {id:id,action:"Read"},
			dataType: "json",
			})
			.done(function(data) {
			
				$('#descripcion_edit').val(data.descripcion);
				$('#siglas_edit').val(data.siglas);
				$('#curso_id').val(data.id);
				$('#estado').val(data.estado);
				$('#EditCursoModal').modal('show');
			})
		
	
		e.preventDefault();
	});

		//funcion update
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
		
	//funcion delete



		//fin de delete



})