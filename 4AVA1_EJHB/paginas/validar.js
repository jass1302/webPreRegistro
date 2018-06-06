function validaFormulario(){
	var varNombre = document.getElementById("nombre");
	var tamNombre = varNombre.value.length;
	var enviar = false;
	var varError = document.getElementById("error");
	//idEditar = Campo tipo Hidden
	//nombre = Campo tipo text xd

	//Saber si se debe de enviar o no el formulario
	//Falso o verdadero
	if(varNombre.value =="" || tamNombre < 3 || varNombre.value[0]==" " 
		|| varNombre.value[-1] == " " || isNaN(varNombre.value[0]) == false){

				varError.innerHTML = "Se ha ingresado un nombre no valido. ";
				alert("Se ha ingresado un nombre no valido.");
			
	}
	else{
		enviar = true;
	}
	
	return enviar; // True = Se manda el formulario xdd
			     // False = No se manda el formulario
}