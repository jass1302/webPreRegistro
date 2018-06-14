function guardarAjax()
{
	//1. Referencias a nuestros campos
	var varId = $("#id").val();
	var varNombre = $("#nombre").val();
	var varApPat = $("#ape_paterno").val();
	var varApMat = $("#ape_materno").val();
	//2. Validar
	//alert(varDocumento);
	//3. Mandar los datos al servidor usando Ajax jQuery

	//Create

	$.ajax({
		url:"paginas/Catalogos/Docentes/proceso.php",
		data:{id:varId, name: varNombre, apPat:varApPat, apMat:varApMat},
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
		url:"paginas/Catalogos/Docentes/actionread.php",
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
		url:"paginas/Catalogos/Docentes/actiondelete.php",
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
		url:"paginas/Catalogos/Docentes/actiongetdata.php",
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
				$("#id").val(objJSON.idrl);
				$("#nombre").val(objJSON.namerl);
				$("#ape_paterno").val(objJSON.pat);
				$("#ape_materno").val(objJSON.mat);
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
	var varId = $("#id").val();
	var varNombre = $("#nombre").val();
	var varApPat = $("#ape_paterno").val();
	var varApMat = $("#ape_materno").val();
	
	//alert(varedit+varNombre+varApPat+varApMat);
	//alert("viejo id: "+varedit+" NuevoID: "+varId);
	//alert(varCosita);

	$.ajax({
		url:"paginas/Catalogos/Docentes/actionedit.php",
		data:{Edit:varedit,id:varId, name: varNombre, apPat:varApPat, apMat:varApMat},
		error:function(p1,p2,p3)
		{
			alert(p3);
		},
		success:function(p1,p2,p3)
		{
			$("#guardar").val("Registrar");
			$("#guardar").attr( 'onclick', 'guardarAjax();');
			actionReadAJAX();
		}
	});
}