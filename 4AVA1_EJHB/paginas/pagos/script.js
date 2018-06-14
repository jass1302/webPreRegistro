function push(){
	var palabra = $("#bus").val();
	//alert("Voy a buscar al estilo facebook: "+palabra);

	if(palabra.length >=0){
		//alert("Voy a buscar: "+palabra);

		$.ajax({
			url: "paginas/pagos/buscador.php",
			data: {pal: palabra},
			error: function(p1,p2,p3){
				//alert(p3);
			},
			success: function(data,p2,p3){
				//alert(data);
				$("#resul").html(data);
			}

		});
	}
}