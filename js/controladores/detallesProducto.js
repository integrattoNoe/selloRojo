var idPres = "";
var prese = [];
const urlSite = "http://integrattodev.cloudapp.net/selloRojoAdmin/index.php/";
const urlImagenes = "http://integrattodev.cloudapp.net/selloRojoAdmin/";
/*const urlSite = "http://localhost/selloRojoAdminC/index.php/";
const urlImagenes = "http://localhost/selloRojoAdminC/";*/
$(document).on("change","#selectPres",function(){
	//alert("asd");
	idPres = $(this).find("option:selected").val();
	//console.log(idPres);
	changeImg();
});
function changeImg(){
	for(var i in prese){
		if(prese[i].id == idPres){
			const img = prese[i].url_imagen;
			$(".imgProductoDetalle").attr("src",urlImagenes+img);
			$(".text-pasteurizada").html(prese[i].presentacion);
		}
	}
}
function getPresen(id){
	$.ajax({
		url:urlSite+"front/getPresentsByProductId",
		data:{"id":id},
		type:"POST",
		success:function(data){
			prese = data.presentaciones;
			console.log(prese);
		},
		error: function(x,e){
			if (x.status==0) {
		        alert('Estás desconectado o se interrumpió la conexión!!\n Por favor verifica tu conexión a Internet.');
		        console.log("aqui")
		    } else if(x.status==404) {
		        alert('URL no encontrada.');
		    } else if(x.status==500) {
		        alert('Error interno del servidor.');
		        console.log(x);
		    } else if(e=='parsererror') {
		        alert('Error.\nRespuesta incorrecta (JSON).');
		    } else if(e=='timeout'){
		        alert('Se sobrepaso el tiempo de conexión.');
		    } else {
		        alert('Error indefinido.\n'+x.responseText);
		    }
		}
	});
}

$(document).on("click",".share",function(){
	console.log(link);
	FB.ui({
	  method: 'share',
	  href: link,
	}, function(response){
		console.log(response);
	});
});
