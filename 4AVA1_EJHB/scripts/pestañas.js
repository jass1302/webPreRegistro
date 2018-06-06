function mandar() {
	var code = $("#aula").val();
	console.log(code);
	$.ajax({
		url:"index.php",
		data:{link:code},
		error:function(p1,p2,p3)
		{

		},
		success:function(p1,p2,p3)
		{

		}
	});
}