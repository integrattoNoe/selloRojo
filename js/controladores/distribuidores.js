$(document).ready(function(){
  index();
});

var lugares = [];
const urlSite = "http://integrattodev.cloudapp.net/selloRojoAdmin/index.php/";
const urlImagenes = "http://integrattodev.cloudapp.net/selloRojoAdmin/";
/*const urlSite = "http://localhost/selloRojoAdminC/index.php/";
const urlImagenes = "http://localhost/selloRojoAdminC/uploads/tiendas/imagenes/";*/

var nom_previo = "";
var estados = [];
var cambio = false;
var tiendas = [];

function index(){
  $.ajax({
    url:urlSite+"distribuidores/get",
    type:"get",
    cache: false,
    contentType: false,
    processData: false,
    success:function(data){
      console.log(data);
      lugares = data.distribuidores;
      estados = data.estados;
      tiendas = data.tiendas;
      $(".contenedorSocios1").html("");
      render_estados();
    },
    complete:function(){
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

function render_estados(){
  var op = "<option value='selecciona'>Selecciona</option>";
  $("#estadosSel").append(op);
  for(var i in estados){
    var op = "<option value='"+estados[i].Estado+"'>"+estados[i].Estado+"</option>";
    $("#estadosSel").append(op);
  }
}


$(document).on("click","#mapsvg path",function(){
  idSel = $(this).attr("id");
  idEstadoSel = $(this).data("idEstado");

  $("#mapsvg path").each(function(){
    if(!$(this).hasClass("existe")){
      $(this).css("fill","#CDDAE0");//gris
    }
  });

  if(!$(this).hasClass("sel")){
    $("#mapsvg path").removeClass("sel");
    $(this).addClass("sel");
    $(this).css("fill","#ff6666");//salmon
    nom_previo = $(this).data("estado");
    console.log(nom_previo);
    $("#estadosSel").val(nom_previo);
  }else{
    $(this).removeClass("sel");
    nom_previo="";
    $(this).css("fill","#CDDAE0");//gris
    $("#addEstado,#addZona").hide();
    $("#delEstado").hide();
    idSel = "";
    idEstadoSel="";
  }
  renderDist();
  renderTiendas();
  console.log("idEstadoNom: "+idSel+", IdEstado: "+idEstadoSel);
});

$(document).on("mouseenter","#mapsvg path",function(){
  if(!$(this).hasClass("existe") && !$(this).hasClass("sel")){
    $(this).css("fill","#ff6666");
  }
});

$(document).on("mouseleave","#mapsvg path",function(){
  if(!$(this).hasClass("existe") && !$(this).hasClass("sel")){
    $(this).css("fill","#CDDAE0");
  }
});

$(document).on("change","#estadosSel",function(){
  console.log("cambio");
  const val = $(this).find("option:selected").val();
  console.log(val);
  $("#mapsvg path").each(function(){
    if($(this).data("estado") == val)
      $(this).click();
  });
});

function renderDist(){
  $("div.contenedorProRe").html("");
  for(var i in lugares){
    if(lugares[i].Estado == nom_previo){
      var el = '<div class="col-sm-3 col-md-3 col-xs-12 corporativo">';
      el += '<h5 class="text-negro3 filson text-uppercase mb-0 fnt-normal">'+lugares[i].Estado+'</h5>';
      el += '<h5 class="widget-title text-cremaF filson-medium mt-0">Distribuidora<br>'+lugares[i].Distribuidora+'</h5>';
      /*el += '<div class="col-md-12 col-sm-12 p-0">';
      el += '<h5 class="font-14 widget-title mb-0 filson-medium">Teléfonos</h5>';
      const tm = lugares[i].Telefono;
      var tmp = tm.split("-");
      for(var j in tmp){
        el += '<p class="mb-0 filson text-negro2">'+tmp[j].trim();+'</p>'
      }
      el += '</div>';*/
      el += '<div class="col-md-12 col-sm-12 p-0">';
      el += '<h5 class="font-14 widget-title mb-0 filson-medium">Domicilio</h5>';
      el += '<p class="mb-0 filson text-negro2">'+lugares[i].Domicilio+'</p>';
      el += '<p class="mb-0 filson text-negro2"> Municipio: '+lugares[i].Municipio+'</p>';
      el += '<p class="mb-0 filson text-negro2">Estado: '+lugares[i].Estado+'</p>';
      //el += '<p class="mb-0 filson text-negro2">C.P: </p>';
      if(lugares[i].URL_maps != null)
        el += '<p class="mb-0 filson text-negro2"><a class="text-cremaF filson" href="'+lugares[i].URL_maps+'" target="_blank">Ver en Google Maps</a> </p>';
      else
        el += '<p class="mb-0 filson text-negro2"></p>';
      
      el += '</div></div>';

      $("div.contenedorProRe").append(el);
    }
  }
}

function renderTiendas(){
  var elem = "";
  $(".contenedorSocios1").html("");
  for(var i in tiendas){  
    if(tiendas[i].Estado == nom_previo.toUpperCase()){
      elem = '<div class="col-md-15 corporativo">';
      elem += '<img src="'+urlImagenes+'/uploads/tiendas/imagenes/'+tiendas[i].URL_img+'">';
      elem += '</div>'
      $(".contenedorSocios1").append(elem);           
    }
  }
}