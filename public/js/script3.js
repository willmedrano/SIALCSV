$("#registro").click(function(){
	var dnomesc = $("#nomesc").val();
	var dnomdirec = $("#nomdirec").val();
	var dtelesc = $("#telesc").val();
	var ddiresc = $("#diresc").val();

	var route = "/escuela";
	var token = $("#token").val();
    var data ='nomesc='+dnomesc+'&nomdirec='+dnomdirec+'&telesc='+dtelesc+'&diresc='+ddiresc;

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data: data,

		success:function(){
			$("#msj-success").fadeIn();

   			 document.getElementById("miForm").reset();
  
		},
		error:function(msj){
			console.log(msj.responseJSON);
			$("#msj").html(msj.responseJSON.nomesc);
			$("#msj-error").fadeIn();
			$("#msj1").html(msj.responseJSON.nomdirec);
			$("#msj-error1").fadeIn();
			$("#msj2").html(msj.responseJSON.telesc);
			$("#msj-error2").fadeIn();
			$("#msj3").html(msj.responseJSON.diresc);
			$("#msj-error3").fadeIn();
		}
	});
});
