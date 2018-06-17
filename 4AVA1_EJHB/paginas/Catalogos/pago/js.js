function guardarAjax()
{
	//1. Referencias a nuestros campos
	var varcantidad = $("#cantidad").val();
	var varDocumento = $("#documento").val();
	//2. Validar
	//alert(varDocumento);
	//3. Mandar los datos al servidor usando Ajax jQuery

	//Create

	$.ajax({
		url:"paginas/Catalogos/Pago/proceso.php",
		data:{cantidad: varcantidad,documento: varDocumento},
		error:function(p1,p2,p3){
			alert("Error: "+p2);
		},
		success:function(respuesta,estado,jqxhr){
			alert("Exito: "+respuesta);
			actionReadAJAX();
		}

	});
}

	//Read

function actionReadAJAX()
{
	$.ajax({
		url:"paginas/Catalogos/Pago/actionread.php",
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
		url:"paginas/Catalogos/Pago/actiondelete.php",
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
		url:"paginas/Catalogos/Pago/actiongetdata.php",
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
				$("#cantidad").val(objJSON.cantidad);
				$("#documento").val(objJSON.documento);
				$("#idEditar").val(objJSON.idrl);
				$("#guardar").val("Actualizar");
				$("#guardar").attr( 'onclick', 'actionEditAJAX();');
			}
			else
			{
				alert("Ocurrió un error desconocido.");
			}	
		}
	});
}

function actionEditAJAX()
{	
	var varedit = $("#idEditar").val();
	var varId = $("#id").val();
	var varcantidad = $("#cantidad").val();
	var varDocumento = $("#documento").val();
	
	//alert(varedit+varNombre+varApPat+varApMat);
	//alert("viejo id: "+varedit+" NuevoID: "+varId);
	//alert(varCosita);

	$.ajax({
		url:"paginas/Catalogos/Pago/actionedit.php",
		data:{Edit:varedit,id:varId, cantidad: varcantidad, documento:varDocumento},
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