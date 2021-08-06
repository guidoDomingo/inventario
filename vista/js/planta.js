$(".tablas").on("click", ".editarPlanta", function(){
	var idPlanta = $(this).attr("idPlanta");
	console.log(idPlanta);

	var datos = new FormData();
	datos.append("idPlanta", idPlanta);

	$.ajax({
	    url:"ajax/planta.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success: function(respuesta){
     		$("#editar_planta").val(respuesta["nombre"]);
     		$("#idPlanta").val(respuesta["id"]);
     	}
	});

	
});

$(".tablas").on("click",".eliminarPlanta", function(){

	var idPlanta = $(this).attr("idPlanta");
	console.log(idPlanta);

	swal({
	  title: "Qieres eliminar",
	  text: "Estas seguro de eliminar la planta industrial",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {
	    window.location = "index.php?ruta=plantas&idPlanta="+idPlanta;
	  } 
	});

});