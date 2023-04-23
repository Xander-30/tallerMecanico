/*=============================================
DATATABLE-SERVIDOR-PRODUCTOS
=============================================*/
/* $.ajax({

     url: ruta+'/producto',
	 success: function(respuesta){
      
		console.log("respuesta", respuesta);

	 },
     error: function (jqXHR, textStatus, errorThrown) {
	    console.error(textStatus + " " + errorThrown);
	 }

}) */



/*=============================================
CAPTURANDO LA RUTA DE MI CMS
=============================================*/

var ruta = $("#ruta").val();
console.log(ruta);

/*===========================
Datatables de cliente
==========================*/

$("#TablaClientes").DataTable({
   
       "language": {

            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
      },
      "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }

    }
});

/*===========================
Datatables de productos
==========================*/

$("#TablaProductos").DataTable({
    

       "language": {

            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
      },
      "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }

    }
});



/*====================================
Preguntar antes de Eliminar Registro
======================================*/

$(document).on("click", ".eliminarRegistro", function(){
	    
        //recibe los parametros 
	    var action = $(this).attr("action"); //recibe la ruta 
	  	var method = $(this).attr("method"); //recibe el metodo delete
	  	var pagina = $(this).attr("pagina"); //recibe el nombre de la pagina a dirigirse
	  	var token = $(this).children("[name='_token']").attr("value"); //recibe el token permitir acceso a la session
	    
	 swal({
  		 title: '¿Está seguro de eliminar este registro?',
  		 text: "¡Si no lo está puede cancelar la acción!",
  		 type: 'warning',
  		 showCancelButton: true,
  		 confirmButtonColor: '#3085d6',
  		 cancelButtonColor: '#d33',
  		 cancelButtonText: 'Cancelar',
  		 confirmButtonText: 'Si, eliminar registro!'
  	}).then(function(result){
	     if(result.value){

	  			var datos = new FormData(); //que sea de tipo formulario
	  			datos.append("_method", method);
	        
	  			datos.append("_token", token);

	  			$.ajax({
	  				url: action,
	  				method: "POST",
	  				data: datos,
	  				cache: false,
	  				contentType: false,
	        	processData: false,
	        	success:function(respuesta){

	        			 if(respuesta == "ok"){
	              // console.log(respuesta);
	    			 		swal({
			                    type:"success",
			                    title: "¡El registro ha sido eliminado!",
			                    showConfirmButton: true,
			                    confirmButtonText: "Cerrar"
				                    
				             }).then(function(result){

				             	if(result.value){

				             		window.location = ruta+'/'+pagina; 

				             	}

				             })

	        			 }

	        		},
			        error: function (jqXHR, textStatus, errorThrown) {
			            console.error(textStatus + " " + errorThrown);
			        }

	  			})

	  		}

	  	})

	}) 



/*====================================
Preguntar antes de Eliminar RegistroProducto
======================================*/

$(document).on("click", ".eliminarProducto", function(){
	    
        //recibe los parametros 
	    var action = $(this).attr("action"); //recibe la ruta 
	  	var method = $(this).attr("method"); //recibe el metodo delete
	  	var pagina = $(this).attr("pagina"); //recibe el nombre de la pagina a dirigirse
	  	var token = $(this).children("[name='_token']").attr("value"); //recibe el token permitir acceso a la session
	    
	 swal({
  		 title: '¿Está seguro de eliminar este registro?',
  		 text: "¡Si no lo está puede cancelar la acción!",
  		 type: 'warning',
  		 showCancelButton: true,
  		 confirmButtonColor: '#3085d6',
  		 cancelButtonColor: '#d33',
  		 cancelButtonText: 'Cancelar',
  		 confirmButtonText: 'Si, eliminar registro!'
  	}).then(function(result){
	     if(result.value){

	  			var datos = new FormData(); //que sea de tipo formulario
	  			datos.append("_method", method);
	        
	  			datos.append("_token", token);

	  			$.ajax({
	  				url: action,
	  				method: "POST",
	  				data: datos,
	  				cache: false,
	  				contentType: false,
	        	processData: false,
	        	success:function(respuesta){

	        			 if(respuesta == "ok"){
	              // console.log(respuesta);
	    			 		swal({
			                    type:"success",
			                    title: "¡El registro ha sido eliminado!",
			                    showConfirmButton: true,
			                    confirmButtonText: "Cerrar"
				                    
				             }).then(function(result){

				             	if(result.value){

				             		window.location = ruta+'/'+pagina; 

				             	}

				             })

	        			 }

	        		},
			        error: function (jqXHR, textStatus, errorThrown) {
			            console.error(textStatus + " " + errorThrown);
			        }

	  			})

	  		}

	  	})

	}) 






