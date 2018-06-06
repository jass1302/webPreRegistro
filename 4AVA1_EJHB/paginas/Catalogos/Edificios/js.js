function guardarAjax()
{
	//1. Referencias a nuestros campos
	var varCosita = $("#edificio").val();
	//2. Validar
	//alert(varCosita);
	//3. Mandar los datos al servidor usando Ajax jQuery

	//Create

	$.ajax({
		url:"paginas/Catalogos/Edificios/proceso.php",
		data:{ name: varCosita},
		error:function(p1,p2,p3){
			alert("Error: "+p2);
		},
		success:function(respuesta,estado,jqxhr){
			//alert("Exito: "+respuesta);
			actionReadAJAX();
		}

	});
}

	//Read

function actionReadAJAX()
{
	$.ajax({
		url:"paginas/Catalogos/Edificios/actionread.php",
		error: function(p1,p2,p3){
			alert(p2);
		},
		success: function(d,p2,p3){
			$("#showtable").html(d);
		}	
	});
}

function actionDeleteAJAX(id)
{
	$.ajax({
		url:"paginas/Catalogos/Edificios/actiondelete.php",
		data:{idEliminar:id},		
		error: function(p1,p2,p3){
			alert(p3);
		},
		success: function(d,p2,p3){
			actionReadAJAX();
		}
	});
}

function actionGetDataAJAX(id)
{
	$.ajax({
		url:"paginas/Catalogos/Edificios/actiongetdata.php",
		data:{idGetData: id},
		error: function(p1,p2,p3)
		{
			alert(p3);
		},
		success:function(data,p2,p3)
		{
			//JSON

			var objJSON = JSON.parse(data);
			//alert(objJSON.id);
			if(objJSON.idrl>0)
			{
				$("#edificio").val(objJSON.namerl);
				$("#idEditar").val(objJSON.idrl);
				$("#guardar").val("Update");
				$("#guardar").attr( 'onclick', 'actionEditAJAX();');

				
			}
			else
			{
				alert("Ocurrió un error desconocidorl");
			}	
		}
	});
}

function actionEditAJAX()
{	
	var varedit = $("#idEditar").val();
	var varCosita = $("#edificio").val();

	//alert(varedit);
	//alert(varCosita);

	$.ajax({
		url:"paginas/Catalogos/Edificios/actionedit.php",
		data:{idEditar: varedit, cosita: varCosita},
		error:function(p1,p2,p3)
		{
			alert(p3);
		},
		success:function(p1,p2,p3)
		{
			$("#guardar").val("Save");
			$("#guardar").attr( 'onclick', 'guardarAjax();');
			actionReadAJAX();
		}
	});
}