$(".tablas").on("click", ".editarCategoria", function(){
	var idCategoria = $(this).attr("idCategoria");
	console.log(idCategoria);

	var datos = new FormData();
	datos.append("idCategoria", idCategoria);

	$.ajax({
	    url:"ajax/categorias.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success: function(respuesta){
     		$("#edit_categoria").val(respuesta["nombre_categoria"]);
     		$("#idCategoria").val(respuesta["id"]);
     	}
	});

	
});

$(".tablas").on("click",".eliminarCategoria", function(){

	var idCategoria = $(this).attr("idCategoria");
	console.log(idCategoria);

	swal({
	  title: "Qieres eliminar",
	  text: "Estas seguro de eliminar la categoria",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {
	    window.location = "index.php?ruta=categorias&idCategoria="+idCategoria;
	  } 
	});

});