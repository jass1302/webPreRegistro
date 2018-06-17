function guardarAjax()
{
	//1. Referencias a nuestros campos
	var varMateria = $("#materia").val();
	var varProfe = $("#profesor").val();	
	var varGrupo = $("#grupo").val();
	//2. Validar
	//3. Mandar los datos al servidor usando Ajax jQuery

	//Create

	$.ajax({
		url:"paginas/asignatura/proceso.php",
		data:{ materia: varMateria, profe: varProfe, grupo: varGrupo},
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
		url:"paginas/asignatura/actionread.php",
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
		url:"paginas/asignatura/actiondelete.php",
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
		url:"paginas/asignatura/actiongetdata.php",
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
				$("#idEditar").val(objJSON.idrl);
				$("#materia").val(objJSON.mate);
				$("#profesor").val(objJSON.prof);
				$("#grupo").val(objJSON.grup);
				$("#guardar").val("Actualizar");
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
	var varMateria = $("#materia").val();
	var varProfe = $("#profesor").val();
	var varGrupo = $("#grupo").val();

	//alert(varedit);
	//alert(varCosita);

	$.ajax({
		url:"paginas/asignatura/actionedit.php",
		data:{idEditar: varedit, materia: varMateria, profe: varProfe, grupo: varGrupo},
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