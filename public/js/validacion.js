



/* $('#crearCliente').on("submit" ,function(e){
 //e.preventDefault();
   var flag = false;
  
   //recorre todos los imputs
    //$('input[type=text]').each(function(index, element){
    $('input').each(function(index, element){
     
    
     if($(element).val().length==0){
   
        //alert($(element).prop('id'));
        //$(element).after("<span style='color:red;'>complete el campo vacio)</span>");
        //.fadeOut(5000)
      
          $(element).after("<span style='color:red;'<br>completar el campo vacio</span><br>");
      
          $(element).focus();
        
          flag = true;
      }
    
    
    });

    if(flag == true)
    {
      return false;
    }

    else{

      return true;
    }

 });
 */
 
/* $("#validar").click(function(){
		//validarcedula();
    existeID(id)
	
	}); */


/* $("#validar").click(function(){

    //var contenido = $("#miParrafo").text();
    var campo_cedula = $("#identification_card").val().trim();
    var campo_name = $("#name").val().trim();
    var campo_last_name =$("#last_name").val().trim();
    var campo_phone = $("#phone").val().trim();
    var campo_direction = $("#direction").val().trim();
    var campo_email = $("#email").val().trim();

    if (campo_cedula.length == 0 || campo_name.length == 0|| campo_last_name.length == 0 ||  campo_phone.length == 0 || campo_direction == 0 ||  campo_email == 0) {
        alert("No puede haber campos vacios");
    }
    else{
        alert("Todo correcto");
    }

});
 */



	
/* function validarcedula(){
   
  var cedula= document.getElementById("identification_card").value;
  
  var sql="SELECT *FROM  clients where identification_card ="+cedula+";"
  //alert(sql);
  
  db.transaction(function (tx) {
	   tx.executeSql(sql, [], function (tx, results) {
		  //var len = results.rows.length, i;
		  var numeroRows= results.rows.length;
		  //alert("Numero de rows: "+results.rows.length)
		 
		  if(numeroRows>0)
		  {
			  alert("Ya existe la cedula")
			 
		  }
		  else{
			  alert("inserte dato");
		  }
		 
	   }, null);
	});
  
}



    function existeID(id) {
      $('.idsDeclarados').each(function () {
          if ( (this).after() == id)
      alert('ya existe');
              return true;
      });
      return false;
  } */
