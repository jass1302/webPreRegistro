function validando(f)
{ alert("funciona");
	return false;
}
function guardarAjax()
{
	//1. Referencias a nuestros campos
	var varNombre=$("#nombre").val();
	var varApPat=$("#apaterno").val();
	var varApMat=$("#amaterno").val();
	var varDate=$("#date").val();
	var varGenero=$(".gener:checked").val();
	var varTelM=$("#telM").val();
	var VarTelF=$("#telF").val();
	var VarMail=$("#correo").val();
	//2. Validar

	//3. Mandar los datos al servidor usando Ajax jQuery

	//Create

	$.ajax({
		url:"paginas/Registro/insertar.php",
		data:{name: varNombre, apPat: varApPat, apMat: varApMat,dateN: varDate,genero: varGenero,telm: varTelM, telf: VarTelF,email: VarMail},
		error:function(p1,p2,p3){
			alert("Error: "+p2);
		},
		success:function(respuesta,estado,jqxhr){
			alert("Exito: "+respuesta);
			//actionReadAJAX();
		}

	});
}

	//Read

function actionCompleteAJAX()
{
	$(".Intere").change(function()
	{
$.ajax({
		url:"paginas/Registro/dinamico.php",
		error: function(p1,p2,p3){
			alert(p2);
		},
		success: function(d,p2,p3){
			$("#InteresUpiiz").html(d);
		}	
	});
	})
}
