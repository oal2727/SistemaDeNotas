
$(document).ready(function(){

	//elegir();
	let edit=false;
	console.log("jquery 2");
	//iniciacion con los archivos js
	Documentos();
	Mostrar_Persona();

	Events();
	function Events(){
		$('#sg_documento').hide();
	}



$(document).on('click','.delete_persona',function(e){
var id = $(this).attr('id');
var urls="../../Controlador/controladorPersona.php";

Swal.fire({
	  title: 'Are you sure?',
	  text: "You won't be able to revert this!",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Si borrar',
	  cancelButtonText : 'No borrar',
	}).then((result) => {
  	if (result.value) {
   			$.ajax({
   				url: urls,
   				type: 'POST',
   				data: {id:id,action:"Delete"},
   			})
   			.done(function(response) {
   				console.log(response)
   				Check();
   				Mostrar_Persona();
   			}).fail(function() {

				Wrong();
			})		
	}
	});

		e.preventDefault();
});
	
	//mostrar documentos
	function Documentos(){
	$.ajax({
		url: '../../Controlador/controladorPersona.php',
		type: 'POST',
		data: {action:"Documentos"},
	})
	.done(function(response) {
		 $('#documento').html(response);
	})
	}

	//mostrar personas
	function Mostrar_Persona(){
		$.ajax({
			url: '../personas/view_personas.php',
			type: 'POST',
		})
		.done(function(response) {
			$('#list_personas').html(response);
		})

		
	}

	//selec item con num_doc
	$('#documento').on('change',function(){
		var param={
			id: $('#documento').val(),
			action: "Siglas"
		}
	$.ajax({
			url: '../../Controlador/controladorPersona.php',
			type: 'POST',
			data: param,
		})
		.done(function(response) {
			$('#num_doc').html(response)
			$('#sg_documento').show();
		})
	});
	// fiin de item box
		$('#addPerson').click(function(){
			$('#agregar_persona').html("Agregar");
			$('#Agregar_Persona').trigger('reset');
			$('.box_id').hide();
			Events();

		})
			//agregar persona
	$(document).on('click','#agregar_persona',function(e){
		var texto=$('#agregar_persona').html();
		///
		var out ="";
		var id_persona=0;

		if(texto == "Update"){
			 out="Update";
			
		}else{
			out="Agregar"
		}
		var param={
			id: $('#id_persona').val(),
			paterno: $('#paterno').val(),
			materno: $('#materno').val(),
			nombre: $('#nombre').val(),
			documento: $('#documento').val(),
			num_doc: $('#numero_doc').val(),
			genero: $('#genero').val(),
			correo: $('#correo').val(),
			action: out

		}
	
		$.ajax({
		url: '../../Controlador/controladorPersona.php',
		type: 'POST',
		data: param,
		})
		.done(function(response) {
			if(response == '1'){
				$("#addPersona").modal('hide');
				Check();
				$('#Agregar_Persona').trigger('reset');
				Mostrar_Persona();
				
			}else{
				$('#message_person').html(response);
			}
	
		
		})
		e.preventDefault();
	});
		//update persona





	$(document).on('click','.edit_persona',function(){
		var data = $(this).attr("id");
		$('#addPersona').modal('show');
		$('#agregar_persona').html("Update");
		$('#sg_documento').show();
		$('#num_doc').show();
		$('#num_doc').html("Numero documento:")
		$('.box_id').show();

		$.ajax({
			url: '../../Controlador/controladorPersona.php',
			type: 'POST',
			data: {id:data,action:"Read"},		
			dataType: 'json',
		})
		.done(function(response) {
			//$('#numero_doc').css('display','block');
			$('#item_box_doc').show();
			$('#paterno').val(response.paterno);
			$('#materno').val(response.materno);
			$('#nombre').val(response.nombre);
			$('#documento').val(response.docu_id);
			$('#numero_doc').val(response.docu_numero);
			$('#genero').val(response.genero);
			$('#correo').val(response.correo);
			$('#id_persona').val(response.id);
			console.log(response.paterno);
			
			

			
		})

	})



	
	
	


})