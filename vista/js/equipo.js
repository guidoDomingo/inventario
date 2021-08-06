
$(".tablas").on("click", ".editarEquipo", function(){
	var idEquipo = $(this).attr("idEquipo");
	console.log(idEquipo);

	var datos = new FormData();
	datos.append("idEquipo", idEquipo);

	$.ajax({
	    url:"ajax/equipos.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success: function(respuesta){
	    	console.log(respuesta);
     		$("#editar_equipo").val(respuesta["nombre_equipo"]);
     		$("#idEquipo").val(respuesta["id"]);
     		$("#editar_marca").val(respuesta["marca"]);
     		$("#editar_modelo").val(respuesta["modelo"]);
     		$("#editar_estado").val(respuesta["estado"]);
     		$("#editar_descripcion").val(respuesta["descripcion"]);
     		$("#editar_stock").val(respuesta["stock"]);
     		$("#editar_codigo").val(respuesta["codigo"]);
     	}
	});

	
});

$(".tablas").on("click",".eliminarEquipo", function(){

	var idEquipo = $(this).attr("idEquipo");
	console.log(idEquipo);

	swal({
	  title: "Qieres eliminar",
	  text: "Estas seguro de eliminar el equipo",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {
	    window.location = "index.php?ruta=equipos&idEquipo="+idEquipo;
	  } 
	});

});

/*=============================================
CAPTURANDO LA CATEGORIA PARA ASIGNAR CÓDIGO
=============================================*/
$(document).on("change","#nuevaCategoria", function(){

	var idCategoria = $(this).val();
	console.log(idCategoria);
	var datos = new FormData();
  	datos.append("idCategoria", idCategoria);

  	$.ajax({

      url:"ajax/equipos.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      	console.log(respuesta);
      	if(!respuesta){

      		var nuevoCodigo = idCategoria+"01";
      		$("#nuevoCodigo").val(nuevoCodigo);

      	}else{

      		var nuevoCodigo = Number(respuesta["codigo"]) + 1;
          	$("#nuevoCodigo").val(nuevoCodigo);

      	}
                
      }

  	})

});

/*=============================================
ACTIVAR EQUIPO
=============================================*/
$(".tablas").on("click", ".btnActivar", function(){

  var idEquipo = $(this).attr("idEquipo");
  var estadoEquipo = $(this).attr("estadoEquipo");

  var datos = new FormData();
  datos.append("activarId", idEquipo);
    datos.append("activarEquipo", estadoEquipo);

    $.ajax({

    url:"ajax/equipos.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
      contentType: false,
      processData: false,
      success: function(respuesta){

          swal({
			  title: "Estado actualizado",
			  icon: "success",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
			    window.location = "equipos";
			  } 
			});

		}



	})

    if(estadoEquipo == 2){

      $(this).removeClass('btn-success');
      $(this).addClass('btn-danger');
      $(this).html('Desactivado');
      $(this).attr('estadoEquipo',1);

    }else{

      $(this).addClass('btn-success');
      $(this).removeClass('btn-danger');
      $(this).html('Activado');
      $(this).attr('estadoEquipo',2);

    }

})