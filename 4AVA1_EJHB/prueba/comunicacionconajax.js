function enviaDatoAlServidor() {
	// 1.- Referencia
	var varDato = document.getElementById("dato");
	var varDato = $ ("#dato").val();

	alert("Antes de usar JQUERY "+varDato);

	// Realicemos la comunicación con el servidor
	// Esta comunicación es mediante AJAX
	// Usando JQUERY
	$.ajax({
		url: "respuestaajax.php",
		data:{ dato : varDato },

		error: function(p1, p2, p3){
			alert(p1+' '+p2+' '+p3);
		},
		success: function(datos,Estatus,jqXHR){
			alert(datos);
		}
	});

	alert("Despues de usar JQUERY");
}