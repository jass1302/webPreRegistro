function guardarAjax()
{
	//1. Referencias a nuestros campos
	var varCosita = $("#grupo").val();
	//alert(varCosita);

	var varidEd = $('#edificio').val();
	//alert(varidEd);

	var varidau = $('#aula').val();
	//alert(varidau);

	var varidhor = $('#horario').val();
	//alert(varidhor);

	//2. Validar
	//alert(varDocumento);
	//3. Mandar los datos al servidor usando Ajax jQuery

	//Create

	$.ajax({
		url:"paginas/Catalogos/Grupos/proceso.php",
		data:{ name: varCosita, 
			   idEd: varidEd, 
			   idAu: varidau, 
			   idH: varidhor},
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
		url:"paginas/Catalogos/Grupos/actionread.php",
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
		url:"paginas/Catalogos/Grupos/actiondelete.php",
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
		url:"paginas/Catalogos/Grupos/actiongetdata.php",
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
				$("#grupo").val(objJSON.namerl);
				$('#edificio').val(objJSON.Edi);
				$('#aula').val(objJSON.Au);
				$('#horario').val(objJSON.Hr);
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
	var varCosita = $("#grupo").val();
	var varidEd = $('#edificio').val();
	var varidau = $('#aula').val();
	var varidhor = $('#horario').val();

	//alert(varedit);
	//alert(varCosita);

	$.ajax({
		url:"paginas/Catalogos/Grupos/actionedit.php",
		data:{idEditar: varedit, cosita: varCosita, idEd: varidEd, idau: varidau, idhor: varidhor},
		error:function(p1,p2,p3)
		{
			alert(p3);
		},
		success:function(p1,p2,p3)
		{
			$("#guardar").val("Guardar");
			$("#guardar").attr( 'onclick', 'guardarAjax();');
			actionReadAJAX();
		}
	});
}