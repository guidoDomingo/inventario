
$(".tablas").on("click", ".editarProveedor", function(){
	var idProveedor = $(this).attr("idProveedor");
	console.log(idProveedor);

	var datos = new FormData();
	datos.append("idProveedor", idProveedor);

	$.ajax({
	    url:"ajax/proveedor.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success: function(respuesta){
	    	console.log(respuesta);
     		$("#editar_proveedor").val(respuesta["nombre"]);
     		$("#idProveedor").val(respuesta["id"]);
     		$("#editar_telefono").val(respuesta["telefono"]);
     		$("#editar_pais").val(respuesta["pais"]);
     		$("#editar_ruc").val(respuesta["ruc"]);
     		$("#editar_correo").val(respuesta["correo"]);
     		$("#editar_direccion").val(respuesta["direccion"]);
     	}
	});

	
});

$(".tablas").on("click",".eliminarProveedor", function(){

	var idProveedor = $(this).attr("idProveedor");
	console.log(idProveedor);

	swal({
	  title: "Qieres eliminar",
	  text: "Estas seguro de eliminar el proveedor",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {
	    window.location = "index.php?ruta=proveedor&idProveedor="+idProveedor;
	  } 
	});

});