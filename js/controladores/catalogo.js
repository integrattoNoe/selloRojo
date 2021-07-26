const urlSite = "http://integrattodev.cloudapp.net/selloRojoAdmin/index.php/";
const urlImagenes = "http://integrattodev.cloudapp.net/selloRojoAdmin/";
/*const urlSite = "http://localhost/selloRojoAdminC/index.php/";
const urlImagenes = "http://localhost/selloRojoAdminC/";*/
var categorias = [];
var tipos = [];
var materiales = [];
var productos = [];
var carPadre = null;
var carHijo = null;
var idCategoria = "";
var idTipo = "";
var idMaterial = "";
var imgN = imgH = "";
var esBusqueda = false;
var qs = "";

$(document).ready(function(){
	var query = window.location.search.substring(1);
	qs = parse_query_string(query);
	if(qs.q != "" && qs.q != undefined){
		console.log(qs.q);
		console.log(Object.keys(qs).length);
		esBusqueda = Object.keys(qs).length > 0;
		console.log(esBusqueda);
	}
	index();
	$("#migas").html('<span class="filson text-negro3"> Inicio </span>/<span class="filson text-negro3"> Productos </span>/');
});

function parse_query_string(query) {
  var vars = query.split("&");
  var query_string = {};
  for (var i = 0; i < vars.length; i++) {
    var pair = vars[i].split("=");
    var key = decodeURIComponent(pair[0]);
    var value = decodeURIComponent(pair[1]);
    // If first entry with this name
    if (typeof query_string[key] === "undefined") {
      query_string[key] = decodeURIComponent(value);
      // If second entry with this name
    } else if (typeof query_string[key] === "string") {
      var arr = [query_string[key], decodeURIComponent(value)];
      query_string[key] = arr;
      // If third or later entry with this name
    } else {
      query_string[key].push(decodeURIComponent(value));
    }
  }
  return query_string;
}

function search(q){
	$.ajax({
		url:urlSite+"front/search",
		type:"POST",
		data:{"q":qs.q},
		success:function(data){
			productos = data.productos;
			render_productos();
			
			/*idCategoria = categorias[0].id;
			getProductosPorCategoria();
			//console.log(categorias);*/
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

function index(){
	$.ajax({
		url:urlSite+"front/getCategories",
		type:"get",
		cache: false,
		contentType: false,
		processData: false,
		success:function(data){
			categorias = data.categorias;
			render_categorias();
			
			/*idCategoria = categorias[0].id;
			getProductosPorCategoria();
			//console.log(categorias);*/
		},
		complete:function(){
			if(!esBusqueda){
				imgH = categorias[0].url_imagen_hover;
				$(document).find(".item#"+ categorias[0].id).click();
			}else{
				search();
			}
			
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

function getProductosPorCategoria(){
	$.ajax({
		url:urlSite+"front/getProductsByCategory",
		type:"post",
		data:{"idc":idCategoria},
		success:function(data){
			console.log(data);
			productos = data.productos;
			tipos = data.tipos;
			materiales = data.materiales;
			render_tipos();
			render_productos();
			render_materiales();
			console.log(productos);
		},
		error: function(x,e){
			if (x.status==0) {
		        alert('Estás desconectado o se interrumpió la conexión!!\n Por favor verifica tu conexión a Internet.');
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

function getFiltroMaterial(){
	$.ajax({
		url:urlSite+"front/getMaterialsFromType",
		type:"post",
		data:{"idt":idTipo},
		success:function(data){
			console.log(data);
			materiales = data.materiales;
			render_materiales();
		},
		error: function(x,e){
			if (x.status==0) {
		        alert('Estás desconectado o se interrumpió la conexión!!\n Por favor verifica tu conexión a Internet.');
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

function render_categorias(){
	var el = "";
	$("#carouselPadre").html("");
	console.log(categorias.length)
	for(var index in categorias){
		el = '<div class="item" id="'+categorias[index].id+'">';
		el += '<a href="#">';
		el += '<img alt="Categoría '+categorias[index].nombre+'" class="cateogiraPadre" src="'+urlImagenes+categorias[index].url_imagen+'" style="">';
		el += '</a>';
		el += '<p class="textCategoriaPadre filson-medium text-negro3 text-center mb-5 mt-5">'+categorias[index].nombre+'</p>';
	    el += '</div>';
	    $("#carouselPadre").append(el);
	}
	if(carPadre){
		carPadre.trigger("destroy.owl.carousel");
	}else{
		carPadre = $('#carouselPadre');
	}
	carPadre.owlCarousel({
	    items:8,
	    loop:false,
	    autoplay: false,
	    autoplayTimeout: 6000,
	    autoplaySpeed: 1000,
	    margin:10,
	    nav:false,
	    dots: false,
	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:5,
	            nav:true,
	            navText: ["<p></p>","<p></p>"]
	        },
	        600:{
	            items:5,
	            nav:true,
	            navText: ["<p></p>","<p></p>"]
	        },
	        700:{
	            items:8,
	            nav:false
	        },
	        1000:{
	            items:8,
	            nav:false
	        }
	    }
	})
}

function render_tipos(){
	var el = "";
	$("#carouselHijo").html("");
	for(var i in tipos){
		el = '<div class="item" id="'+tipos[i].id+'">'+
           	 '<a class="btn btn-colored filson-bold btn-verHijo" href="#">'+tipos[i].nombre+'</a>'+
             '</div>';
        $("#carouselHijo").append(el);
    }
    if(carHijo){
    	carHijo.trigger("destroy.owl.carousel");
    }else{
    	carHijo = $('#carouselHijo');
    }
    carHijo.owlCarousel({
        items:6,
        loop:false,
        autoplay: false,
        autoplayTimeout: 6000,
        autoplaySpeed: 1000,
        margin:10,
        nav:false,
        dots: false,
        responsiveClass:true,
        responsive:{
            0:{
                items:3,
                nav:true,
                navText: ["<p></p>","<p></p>"]
            },
            600:{
                items:4,
                nav:true,
                navText: ["<p></p>","<p></p>"]
            },
            1000:{
                items:8,
                nav:false,
                navText: ["<p></p>","<p></p>"]
            }
        }
    })
}

function render_materiales(){
	$(".text-negrp3 select").html("");
	var el = '<option selected disabled>Filtrar por:</option>';
	$(".text-negrp3 select").append(el);
	for(var i in materiales){
		el = '<option value="'+materiales[i].id+'">'+materiales[i].tipo+'</option>';
		$(".text-negrp3 select").append(el);
	}
	
}

function render_productos(){
	var el = "";
	const sizeT = tipos.length;
	const sizeC = categorias.length;
	$(".contenedorProductos > .container > .row > div").html("");
	for(var i in productos){
		console.log(productos[i]);
		el = '<div class="col-md-3 col-sm-4 col-xs-6" id="'+productos[i].pId+'">';
		el += '<a class="text-negro2 notoserif" href="./detalle-producto.php?p='+productos[i].pId+'&pre='+productos[i].preId+'">';
		el += '<article class="post clearfix postProducto">';
		el += '<img src="'+urlImagenes+productos[i].preUrlImg+'" alt="'+productos[i].nombre+productos[i].preMili+'" class="img-responsive imgProducto">'
		el += '<div class="divTop"></div>';
		el += ' <div class="divBottom">';
		el += '<div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">';
		el += '<h4 class="text-center tituloProducto notoserif">'+productos[i].pNombre+'</h4>';
		el += '<p class="descripcionProducto text-center text-negro2 filson">'+productos[i].preMili+' '+productos[i].prePresent+' '+productos[i].mTipo+'</p>';
		el += '</div>';
		el += '</div>';
		el += '</article>';
		el += '</a>';
		el += '</div>';
		if(idTipo == "" && idMaterial == ""){
			$(".contenedorProductos > .container > .row > div").append(el);
			$(el).data("pre",productos[i].preId);
			console.log("ids vacios, se agrega")
		}else if(idTipo == productos[i].tId){
			if(idMaterial != "" && idMaterial == productos[i].mId){
				$(".contenedorProductos > .container > .row > div").append(el);
				$(el).data("pre",productos[i].preId);
				console.log("ids coinciden")
			}else if(idMaterial == ""){
				$(".contenedorProductos > .container > .row > div").append(el);
				$(el).data("pre",productos[i].preId);
				console.log("tipo coincide")
			}
		}else{
			console.log("mal");
		}
	}
}
var migas = [];
function updateMigas(txt,accion, index){
	var migasTxt = '<span class="filson text-negro3"> Inicio </span>/<span class="filson text-negro3"> Productos </span>/';
	if(accion == "add"){
		migas.push(txt);
	}else if(accion == "add_update"){
		migas.splice(index,1);
		migas.push(txt);
	}else{
		migas.splice(index,1);
	}
	var count = migas.length;
	for(var i = 0; i<count; i++){
		if(i == (count-1)){
			//ultima
			migasTxt += "<span class='tagActive text-negro3'> "+migas[i]+" </span>";
		}else{
			migasTxt += "<span class='filson text-negro3'> "+migas[i]+" </span>/";
		}
		
	}
	$("#migas").html(migasTxt);
	//'<span class="filson text-negro3"> Inicio </span>/<span class="filson text-negro3"> Productos </span>/ <span class="filson text-negro3"> '+categorias[idCategoria].nombre+' </span>/<span class="filson text-negro3"> '+tipos[idTipo].nombre+' </span>/ <span class="tagActive text-negro3"></span>';
}

function clear(){
	idCategoria = "";
	idTipo = "";
	idMaterial = "";
}

$(document).on("click","#carouselPadre .item",function(e){
	e.preventDefault();
	$("#carouselPadre .item").each(function(){
		$(this).removeClass("act");
	});
	idCategoria = $(e.target).closest("div").attr("id");
	console.log("idClick: "+idCategoria);
	const dataP = $(e.target).closest("div").data("pre");
	idTipo = "";
	idMaterial = "";
	updateMigas("","del",1);
	for(var i in categorias){
		console.log("index: "+i);
		console.log(categorias[i]);
		if(categorias[i].id == idCategoria){
			getProductosPorCategoria(idCategoria);
			migas = [];
			updateMigas(categorias[i].nombre,"add",0);
			$(this).addClass("act");
			$(this).find("img").attr("src",urlImagenes+imgH);
			//break;
		}else{
			$("#carouselPadre #"+categorias[i].id).find("img").attr("src",urlImagenes+categorias[i].url_imagen);
		}
	}
});


$(document).on({
    mouseenter: function () {
        //stuff to do on mouse enter
        console.log($(this).attr("id"));
        for(var i in categorias){
        	if(categorias[i].id == $(this).attr("id")){
        		imgN = categorias[i].url_imagen;
        		imgH = categorias[i].url_imagen_hover;
        		$(this).find("img").attr("src",urlImagenes+imgH);
        	}
        }
        
    },
    mouseleave: function () {
    	if(!$(this).hasClass("act"))
        	$(this).find("img").attr("src",urlImagenes+imgN);
    }
},"#carouselPadre .item");

$(document).on("click","#carouselHijo .item",function(e){
	e.preventDefault();
	idMaterial = "";
	updateMigas("","del",2);
	idTipo = $(e.target).closest("div").attr("id");
	$("#carouselHijo .item").find("a.btn").css("background-color","#bfbfbf !important");
	$(this).find("a.btn").css({"color":"#fff !important","background-color":"#ff6666 !important"});
	for(var i in tipos){
		if(tipos[i].id == idTipo){
			render_productos();
			getFiltroMaterial(idTipo);
			updateMigas(tipos[i].nombre,"add_update",1);
			break;
		}
	}
	
});

$(".text-negrp3 select").on("change",function(){
	idMaterial = $(this).find("option:selected").val();
	console.log(idMaterial);
	for(var i in materiales){
		if(materiales[i].id == idMaterial){
			render_productos();
			updateMigas(materiales[i].tipo,"add_update",2);
			break;
		}
	}
	
});