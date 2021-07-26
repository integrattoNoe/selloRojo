var drawingManager;
var all_overlays = [];
var selectedShape;
var colors = ['#f69105', '#FF1493', '#32CD32', '#FF8C00', '#4B0082'];
var selectedColor;
var colorButtons = {};
var map;
var geocoder;
var areas_bd = [];
var selected_es_bd = false;
var infoWindow;
var globalZindex = 0;
var globalSelZindex;
var modificado = false;

function clearSelection() {
  if (selectedShape) {
    if(selected_es_bd){
      selectedShape.set("fillColor","#3c30c4");
    }
    selectedShape.setEditable(false);
    selectedShape = null;
    $("#guardarAreas,#modArea,#delAreaBD").hide();
  }
  if(all_overlays.length>0 || modificado){
    $("#guardarAreas").show();
  }else{
    $("#guardarAreas").hide();
  }
}

function setSelection(shape) {
  clearSelection();
  selectedShape = shape;
  console.log("Selected:");
  shape.setEditable(true);
  console.log(shape);
  selected_es_bd = false;
  if(all_overlays.length>0){
    $("#guardarAreas").show();
  }
  //selectColor(shape.get('fillColor') || shape.get('strokeColor'));
  
}
function setSelectionDB(shape) {
  clearSelection();
  selectedShape = shape;
  //console.log("Selected:");
  
  //shape.setEditable(true);
  console.log(shape);
  selected_es_bd = true;
  //selectColor(shape.get('fillColor') || shape.get('strokeColor'));
  
}

function getCoords(shape){
 var len = shape.getPath().getLength();
 var htmlStr = "";
   for (var i = 0; i < len; i++) {
    if(i == 0)
      htmlStr += shape.getPath().getAt(i).toUrlValue(5);
    htmlStr += ":"+shape.getPath().getAt(i).toUrlValue(5);
     //Use this one instead if you want to get rid of the wrap > new google.maps.LatLng(),
     //htmlStr += "" + myPolygon.getPath().getAt(i).toUrlValue(5);
   }
   return htmlStr;
}

function deleteSelectedShape() {
  if (selectedShape) {
    selectedShape.setMap(null);
  }
}

function deleteAllShape() {
  for (var i = 0; i < all_overlays.length; i++) {
    all_overlays[i].overlay.setMap(null);
  }
  all_overlays = [];
  /*for (var i = 0; i < areas_bd.length; i++) {
    areas_bd[i].overlay.setMap(null);
  }*/
  if(!modificado)
    areas_bd = [];
  selected_es_bd = false;
  //arrEditadoDB = [];
  clearSelection();
}

function guardarAreas(){
  var formD = new FormData();
  formD.append("opcion",4);
  var arrNuevas = [];
  var okGuardarAreas = true;
  var arrModifAreas = [];
  var addEsitado=false;

  for (var i = 0; i < all_overlays.length; i++) {
    //console.log(all_overlays[i]);
    var newShape1 = all_overlays[i].overlay;
    setSelection(newShape1);
    //setTimeout(function(){
      var nombreA = "";
        nombreA = prompt("Ingresa el nombre para el área", "");
          if (nombreA == null || nombreA == "") {
              console.log("Debes agregar el nombre para el área");
              okGuardarAreas = false;
              
          } else {
              arrNuevas.push({nombre:nombreA,zona:getCoords(newShape1),idEstado:idEstadoSel});
              //var details = JSON.stringify({nombre:nombreA,zona:getCoords(newShape1),idEstado:idEstadoSel});
              
              
          }
    //},200);
  }
  if(okGuardarAreas && all_overlays.length>0)
    formD.append("areasNuevas",JSON.stringify(arrNuevas));

  //setTimeout(function(){
    for (var ii = 0; ii<areas_bd.length; ii++){
      if(arrEditadoDB[ii]){
        addEsitado = true;
        var newShape1 = areas_bd[ii].overlay;
        setSelection(newShape1);
        console.log("Hay que guardar esta area: "+areas_bd[ii].idArea);
        arrModifAreas.push({"idArea":areas_bd[ii].idArea, "zona":getCoords(newShape1)});
      }
      /*var newShape1 = areas_bd[ii].overlay;
      console.log(getCoords(newShape1));*/
    }
    if(addEsitado)
      formD.append("areasModif",JSON.stringify(arrModifAreas));
    if(okGuardarAreas){
      $.ajax({
        url:"../server/areas_model.php",
        type:"POST",
        data:formD,
        cache: false,
        contentType: false,
        processData: false,
        success:function(data){
          console.log(data);
          if(data["status"] == 200){
            alert("Se han guardado las zonas");
            limpiarAreasDB();
            getAreas();
          }else{
            alert(data["msg"]);
            
          }

          //console.log(data);
        },
        error:function(x,e){
          if (x.status==0) {
                alert('You are offline!!\n Please Check Your Network.');
            } else if(x.status==404) {
                alert('Requested URL not found.');
            } else if(x.status==500) {
                alert('Internel Server Error.');
            } else if(e=='parsererror') {
                alert('Error.\nParsing JSON Request failed.');
            } else if(e=='timeout'){
                alert('Request Time out.');
            } else {
                alert('Unknow Error.\n'+x.responseText);
            }
          //console.log("ERROR: "+data);
          //$("#alertaError").show();
        }
      });
    }
 // },400);
  
}

function selectColor(color) {
  selectedColor = color;
  for (var i = 0; i < colors.length; ++i) {
    var currColor = colors[i];
    colorButtons[currColor].style.border = currColor == color ? '2px solid #789' : '2px solid #fff';
  }

  // Retrieves the current options from the drawing manager and replaces the
  // stroke or fill color as appropriate.
  /*var polylineOptions = drawingManager.get('polylineOptions');
  polylineOptions.strokeColor = color;
  drawingManager.set('polylineOptions', polylineOptions);

  var rectangleOptions = drawingManager.get('rectangleOptions');
  rectangleOptions.fillColor = color;
  drawingManager.set('rectangleOptions', rectangleOptions);

  var circleOptions = drawingManager.get('circleOptions');
  circleOptions.fillColor = color;
  drawingManager.set('circleOptions', circleOptions);*/

  var polygonOptions = drawingManager.get('polygonOptions');
  polygonOptions.fillColor = color;
  drawingManager.set('polygonOptions', polygonOptions);
}

function setSelectedShapeColor(color) {
  if (selectedShape) {
    if (selectedShape.type == google.maps.drawing.OverlayType.POLYLINE) {
      selectedShape.set('strokeColor', color);
    } else {
      selectedShape.set('fillColor', color);
    }
  }
}

function makeColorButton(color) {
  var button = document.createElement('span');
  button.className = 'color-button';
  button.style.backgroundColor = color;
  google.maps.event.addDomListener(button, 'click', function() {
    selectColor(color);
    setSelectedShapeColor(color);
  });

  return button;
}

function buildColorPalette() {
  var colorPalette = document.getElementById('color-palette');
  for (var i = 0; i < colors.length; ++i) {
    var currColor = colors[i];
    var colorButton = makeColorButton(currColor);
    colorPalette.appendChild(colorButton);
    colorButtons[currColor] = colorButton;
  }
  selectColor(colors[0]);
}

function initialize() {
  //alert("holi");
  geocoder = new google.maps.Geocoder();
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: new google.maps.LatLng(20.6737777, -103.4054534),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    disableDefaultUI: true,
    zoomControl: true
  });

  var polyOptions = {
    strokeWeight: 2,
    fillOpacity: 0.45,
    editable: true,
    draggable:true,
    strokeColor: '#f69105'
  };
  // Creates a drawing manager attached to the map that allows the user to draw
  // markers, lines, and shapes.
  drawingManager = new google.maps.drawing.DrawingManager({
    drawingMode: google.maps.drawing.OverlayType.POLYGON,
    /*markerOptions: {
      draggable: true
    },
    polylineOptions: {
      editable: true,
      draggable:true
    },
    rectangleOptions: polyOptions,
    circleOptions: polyOptions,*/
    polygonOptions: polyOptions,
    map: map
  });

  drawingManager.setOptions({
    drawingControlOptions: {
      
      drawingModes: ['polygon']
    }
  });

  google.maps.event.addListener(drawingManager, 'overlaycomplete', function(e) {
    e.overlay.setOptions({zIndex:globalZindex++});
    console.log(e);
    all_overlays.push({overlay:e.overlay,bd:false,index:globalZindex});
    console.log(all_overlays);
    if (e.type != google.maps.drawing.OverlayType.MARKER) {
      // Switch back to non-drawing mode after drawing a shape.
      drawingManager.setDrawingMode(null);

      // Add an event listener that selects the newly-drawn shape when the user
      // mouses down on it.
      var newShape = e.overlay;
      newShape.type = e.type;
      google.maps.event.addListener(newShape, 'click', function() {
        setSelection(newShape);
        console.log(this.zIndex);
      });
      setSelection(newShape);
       google.maps.event.addListener(newShape.getPath(), 'set_at', function() {
          console.log("test");
       });

       google.maps.event.addListener(newShape.getPath(), 'insert_at', function() {
          console.log("test");
           //getCoords(newShape);
       });
    }
  });

  // Clear the current selection when the drawing mode is changed, or when the
  // map is clicked.
  google.maps.event.addListener(drawingManager, 'drawingmode_changed', clearSelection);
  google.maps.event.addListener(map, 'click', clearSelection);
  google.maps.event.addDomListener(document.getElementById('delete-button'), 'click', deleteSelectedShape);
  google.maps.event.addDomListener(document.getElementById('delete-all-button'), 'click', deleteAllShape);
  google.maps.event.addDomListener(document.getElementById('guardarAreas'), 'click', guardarAreas);
  infoWindow = new google.maps.InfoWindow();
  buildColorPalette();
}

/*geolocalizar*/
function codeAddress() {
    //var address = document.getElementById('address').value;
    geocoder.geocode( { 'address': nom_previo}, function(results, status) {
      console.log(results);
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
        /*var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });*/
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }

google.maps.event.addDomListener(window, 'load', initialize);

var nom_previo="";
var idSel="";
var idEstadoSel ="";

$(document).on("click","#mapsvg path",function(){
  idSel = $(this).attr("id");
  idEstadoSel = $(this).data("idEstado");
  $("#mapsvg path").each(function(){
    if(!$(this).hasClass("existe")){
      $(this).css("fill","#CDDAE0");//gris
    }
  });
  if(!$(this).hasClass("existe")){
    $(this).css("fill","#3c30c4");//azul
    $("#addEstado").show();
    $("#delEstado,#addZona").hide();
  }else{
    $("#addEstado").hide();
    $("#delEstado,#addZona").show();
  }
  if(!$(this).hasClass("sel")){
    $("#mapsvg path").removeClass("sel");
    $(this).addClass("sel");
    nom_previo = $(this).data("estado");
    
  }else{
    $(this).removeClass("sel");
    nom_previo="";
    $("#addEstado,#addZona").hide();
    $("#delEstado").hide();
    idSel = "";
    idEstadoSel="";
  }
  $("#mapsvg h5").text(nom_previo);
  console.log("idEstadoNom: "+idSel+", IdEstado: "+idEstadoSel);
});

$(document).on("mouseenter","#mapsvg path",function(){
  if(!$(this).hasClass("existe") && !$(this).hasClass("sel")){
    $(this).css("fill","#3c30c4");
  }
  $("#mapsvg h5").text($(this).data("estado"));
});
$(document).on("mouseleave","#mapsvg path",function(){
  if(!$(this).hasClass("existe") && !$(this).hasClass("sel")){
    $(this).css("fill","#CDDAE0");
  }
  $("#mapsvg h5").text(nom_previo);
});

function setEsth5(nombre){
  var nom = nombre.toUpperCase();
  $("#mapsvg h5").text(nom);
}

$(document).on("click","#addEstado",function(){
  if(nom_previo!=""){
    if(!$(document).find("#"+idSel).hasClass("existe")){
      guardarEstado();
    }else{
      alert("Ese estado ya existe");
    }
  }else{
    alert("No has seleccionado ningun estado")
  }
});

function guardarEstado(){
  $.ajax({
    url:"../server/areas_model.php",
    type:"POST",
    data: {"opcion":2,"estado":nom_previo},
    success:function(data){
      console.log(data);
      if(data["status"] == 200){
        alert("Se ha agregado el estado");
        $("#addEstado").hide();
        $("#delEstado").hide();
        $("#mapsvg h5").text("");
        cargarEstados();
      }else{
        alert(data["msg"]);
        
      }
      guardar_back = false;

      //console.log(data);
    },
    error:function(x,e){
      if (x.status==0) {
            alert('You are offline!!\n Please Check Your Network.');
        } else if(x.status==404) {
            alert('Requested URL not found.');
        } else if(x.status==500) {
            alert('Internel Server Error.');
        } else if(e=='parsererror') {
            alert('Error.\nParsing JSON Request failed.');
        } else if(e=='timeout'){
            alert('Request Time out.');
        } else {
            alert('Unknow Error.\n'+x.responseText);
        }
      //console.log("ERROR: "+data);
      //$("#alertaError").show();
    }
  });
}

function cargarEstados(){
  console.log(areas_bd);
  $.ajax({
    url:"../server/areas_model.php",
    type:"POST",
    data: {"opcion":1},
    success:function(data){
      console.log(data);
      if(data["status"] == 200){
        for(var i = 0; i<data.estados.length; i++){
          var estado = data.estados[i].nombre;
          var estadoLow = estado.toLowerCase();
          console.log("Estado: "+estadoLow);
          $("#mapsvg path").each(function(){
            //console.log("data-estado: "+$(this).data("estado"));

            if($(this).data("estado") == estado){
              $(this).css("fill","#f69105").addClass("existe");//naranja
              $(this).data("idEstado",data.estados[i].id);
            }
          });
          //$(document).find("#"+estado).css("fill","#f69105").addClass("existe");
        }
      }else{
        alert(data["msg"]);
        
      }

      //console.log(data);
    },
    error:function(x,e){
      if (x.status==0) {
            alert('You are offline!!\n Please Check Your Network.');
        } else if(x.status==404) {
            alert('Requested URL not found.');
        } else if(x.status==500) {
            alert('Internel Server Error.');
        } else if(e=='parsererror') {
            alert('Error.\nParsing JSON Request failed.');
        } else if(e=='timeout'){
            alert('Request Time out.');
        } else {
            alert('Unknow Error.\n'+x.responseText);
        }
      //console.log("ERROR: "+data);
      //$("#alertaError").show();
    }
  });
}

function limpiarAreasDB(){
  
}

function getAreas(){
  
  deleteAllShape();
  arrEditadoDB = [];
  
  selected_es_bd = false;
  modificado = false;
  for (var i = 0; i < areas_bd.length; i++) {
      areas_bd[i].overlay.setMap(null);
    }
  areas_bd = [];
  globalZindex = 0;
  globalSelZindex = "";
  console.log(areas_bd);
  
   $.ajax({
    url:"../server/areas_model.php",
    type:"POST",
    data: {"opcion":3,"idEstado":idEstadoSel},
    success:function(data){
      //console.log(data);
      if(data["status"] == 200){
        //console.log(data);
        for(var i = 0; i<data.areas.length; i++){
          var nombreArea = data.areas[i].area_name;
          var zona = data.areas[i].zona;
          var id_area = data.areas[i].idArea;
          var arrZonas = zona.split(":");
          var arrLatLong = [];
          for(let ii = 0; ii<arrZonas.length; ii++){
            var lat_long = arrZonas[ii].split(",");
            arrLatLong.push({lat:parseFloat(lat_long[0]), lng:parseFloat(lat_long[1])});
            //console.log(arrLatLong[i]);
          }
          var myPolygon = new google.maps.Polygon({
              paths: arrLatLong,
              draggable: false, // turn off if it gets annoying
              editable: false,
              strokeColor: '#3c30c4',
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: '#3c30c4',
              fillOpacity: 0.35,
              zIndex:globalZindex++
            });
          ;
          //console.log(myPolygon);
          areas_bd.push({overlay:myPolygon,bd:true, idArea:id_area, nombre:nombreArea, index:globalZindex});
          myPolygon.setMap(map);
          addListenersOnPolygon(myPolygon,nombreArea);
          //console.log("all:")
         // console.log(all_overlays);
          /*google.maps.event.addListener(all_overlays[i].overlay, 'click', function() {
            //setSelection(all_overlays[i].overlay);
          });*/
          
          
          //setSelection(all_overlays[i].overlay);
          
          //clearSelection();
          
        }
        /*for(var i = 0; i<all_overlays.length; i++){
          google.maps.event.addListener(all_overlays[i].overlay, 'click', function() {
            setSelection(all_overlays[i].overlay);
          });
        }*/

        //clearSelection();
      }else{
        alert(data["msg"]);
        
      }

      //console.log(data);
    },
    error:function(x,e){
      if (x.status==0) {
            alert('You are offline!!\n Please Check Your Network.');
        } else if(x.status==404) {
            alert('Requested URL not found.');
        } else if(x.status==500) {
            alert('Internel Server Error.');
        } else if(e=='parsererror') {
            alert('Error.\nParsing JSON Request failed.');
        } else if(e=='timeout'){
            alert('Request Time out.');
        } else {
            alert('Unknow Error.\n'+x.responseText);
        }
      //console.log("ERROR: "+data);
      //$("#alertaError").show();
    }
  });
   console.log(areas_bd);
}
//closure_uid_195251274
var arrEditadoDB = [];

var addListenersOnPolygon = function(polygon,areaN) {
  //attachPolygonInfoWindow(polygon,areaN);
  google.maps.event.addListener(polygon, 'click', function (e) {
    globalSelZindex = this.zIndex;
    arrEditadoDB[globalSelZindex]=false;
    setSelectionDB(polygon);
    polygon.set('fillColor', "#000000");
    infoWindow.setContent(areaN);
    var latLng = e.latLng;
    infoWindow.setPosition(latLng);
    infoWindow.open(map);
    $("#modArea,#delAreaBD").show();

  });
  google.maps.event.addListener(polygon.getPath(), 'set_at', function(e) {
     arrEditadoDB[globalSelZindex]=true;
     modificado = true;
  });

  google.maps.event.addListener(polygon.getPath(), 'insert_at', function(e) {
     arrEditadoDB[globalSelZindex]=true;
     modificado = true;
  });  
}


function attachPolygonInfoWindow(polygon, nombre) {
    
    google.maps.event.addListener(polygon, 'click', function (e) {
        infoWindow.setContent(nombre);
        var latLng = e.latLng;
        infoWindow.setPosition(latLng);
        infoWindow.open(map);
    });
}

$(document).on("click","#backEstados",function(){
  $("#cont_mapa,#panel").fadeOut("slow");
  $("#main-container").css("display","flex");
  arrEditadoDB = [];
  
  selected_es_bd = false;
  modificado = false;
  for (var i = 0; i < areas_bd.length; i++) {
      areas_bd[i].overlay.setMap(null);
    }
  areas_bd = [];
  globalZindex = 0;
  globalSelZindex = "";
});
$(document).on("click","#addZona",function(){
  $("#main-container").fadeOut("slow");
  $("#cont_mapa,#panel").css("display","flex");
  arrEditadoDB = [];
  
  selected_es_bd = false;
  modificado = false;
  for (var i = 0; i < areas_bd.length; i++) {
      areas_bd[i].overlay.setMap(null);
    }
  areas_bd = [];
  globalZindex = 0;
  globalSelZindex = "";
  deleteAllShape();
  codeAddress();
  
  getAreas();
});

$(document).on("click","#modArea", function(){
  if(selected_es_bd){
    selectedShape.setEditable(true);

  }
});