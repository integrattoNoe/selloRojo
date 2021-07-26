<!DOCTYPE html>
<html dir="ltr" lang="es" class="html1">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="SelloRojo - website" />
<meta name="keywords" content=" sellorojo, confiable, sincero, lácteos, leches, vaca, pasteurizada" />
<meta name="author" content="Integratto" />

<!-- Page Title -->
<title>Sello Rojo</title>

<!-- Favicon and Touch Icons--> 
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="icon">
<link href="images/apple-touch-icon-72x72.png" rel="icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
    
    <!-- AWESOME FONTS ACTUALIZADO -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/controladores/detallesProducto.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    
    <style>
        .html1{
            /*overflow-y: hidden;*/
        }
        
        @media screen and (max-width: 770px){
            #homeDetalle .tp-bgimg{
                background-size: 100% 50% !important;
            }
        }
    </style>
    <script>
      $(document).ready(function() {
        $.ajaxSetup({ cache: true });
        $.getScript('https://connect.facebook.net/en_US/sdk.js', function(){
          FB.init({
            appId: '396653734236061',
            version: 'v2.7' // or v2.1, v2.2, v2.3, ...
          });     
          //$('#loginbutton,#feedbutton').removeAttr('disabled');
          //FB.getLoginStatus(updateStatusCallback);
        });
      });
    </script>
    <?php
    if(isset($_GET["p"], $_GET["pre"])){
      $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        require_once("server/api.php");
        $resp = getProductById($_GET["p"],$_GET["pre"]);

        //var_dump($resp);
        $producto = $resp->producto[0];
        //var_dump($producto);
        //echo "<br><br><br>";
        $idT = $producto->tId;
        $idP = $_GET["p"];
        $random = getRandom($idT);
        $productos = $random->productos;
        //var_dump($productos);
        $specs = $resp->specs;
        $presentaciones = $resp->presentaciones;
        //var_dump($presentaciones);
        //$urlImg = "http://localhost/selloRojoAdminC/";
        $urlImg = "http://integrattodev.cloudapp.net/selloRojoAdmin/";
        //echo "<br><br><br>";
        //var_dump($producto);
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }
    ?>
    <meta property="og:url"           content="<?php echo $actual_link; ?>" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="Sello Rojo - <?php echo $producto->pNombre; ?>" />
    <meta property="og:description"   content="<?php echo $producto->pDesc; ?>" />
    <meta property="og:image"         content="<?php echo $urlImg.$producto->preUrlImg; ?>" />
    <meta property="og:image:width"  content="600px">
    <meta property="og:image:height"  content="600px">
    <meta property="fb:app_id"        content="396653734236061">
</head>
<body>
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img src="images/preloaders/9.gif" alt="preloader">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Desactivar preloader</div>
  </div>
  
  <?php
    include "menu.html";
    ?>
  
  <!-- Start main-content -->
  <div class="main-content">
<!-- Section: home -->
  <?php 
  if(isset($_GET["p"], $_GET["pre"])){
    
    
    
    //echo $actual_link;
  ?>
  <script>
    var idP = "<?=$idP?>";
    var link = "<?=$actual_link?>";
    console.log(idP);
    getPresen(idP);
  </script>
  
    <section id="homeDetalle" class="divider">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/bg/bg-detalle.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/bg/bg-detalle.jpg"  
                     alt="Shot Vainilla" 
                     data-visibility="['off', 'off', 'off']"  
                     data-bgposition="center top" 
                     data-bgfit="cover" 
                     data-bgrepeat="no-repeat" 
                     class="rev-slidebg" 
                     data-bgparallax="1" 
                     data-no-retina>
                <!-- LAYERS -->

               <!-- BEGIN IMAGE LAYER -->
                <div class="tp-caption tp-resizeme" 

                     data-frames='[{"delay": 500, "speed": 300, "from": "opacity: 0", "to": "opacity: 1"}, 
                                   {"delay": "wait", "speed": 300, "to": "opacity: 0"}]' 

                     data-type="image" 
                     data-x="['left','left','center','center']"
                     data-hoffset="['180', '180', '0']"
                     data-y="['middle']"
                     data-voffset="['50', '50', '-300', '-230']" 
                     data-hoffset="0" 
                     data-voffset="0" 
                     data-width="auto"
                     data-height="auto"
                     style="max-width: 311px;"
                >
                  <img class="imgProductoDetalle" src="<?php echo $urlImg.$producto->preUrlImg; ?>" alt="<?php echo $producto->pNombre; ?>">
                </div>
                <!-- END IMAGE LAYER -->

                  
                <!-- LAYER NR. 1 -->
                <div class="tp-caption notoserif text-cremaF tp-resizeme pl-0 pr-0 pTitulo"
                  id="rs-1-layer-1"

                  data-x="['middle']"
                  data-hoffset="['242','242','0']"
                  data-y="['top']"
                  data-voffset="['50', '50', '580', '465']" 
                  data-fontsize="['50', '50', '50', '35']"
                  data-lineheight="['50', '', '', '30']"
                     
                  data-max_width="500px"
                  data-width="600px"
                  data-height=""
                  data-whitespace="normal"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none"
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: normal;"><?php echo $producto->pNombre; ?>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-pasteurizada text-negro2 filson-medium" 
                  id="rs-1-layer-2"

                  data-x="['middle']"
                  data-hoffset="['242', '242', '0']"
                  data-y="['top']"
                  data-voffset="['150','105','625','505']"
                  data-fontsize="['19','18','23']"
                  data-lineheight="['28']"
                     
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;"><?php echo $producto->prePresent ?>
                </div>
                  
                  <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-descripcionProducto filson" id="rs-1-layer-3"
                       data-x="['middle']"
                          data-hoffset="['242', '242', '0']"
                          data-y="['top']"
                          data-voffset="['205','175','715','570']"
                          data-fontsize="['19','18','23']"
                          data-lineheight="['28']"
                          data-width="400"
                        data-height="['auto']"
                        data-transform_idle="o:1;s:500"
                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1800"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 5;
                               white-space: normal;
                               line-height: 22px;
                               font-weight: normal;
                               color: rgba(0, 0, 0, 1.00);">
                      <?php echo $producto->pDesc; ?>
                </div>
                
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme filson" id="rs-1-layer-4"
                       data-x="['middle']"
                        data-hoffset="['260', '260', '0']"
                        data-y="['top']"
                        data-voffset="['430','420','1000','820']"
                        data-width="['360']"
                        data-height="['auto']"
                        data-transform_idle="o:1;s:500"
                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1800"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 5;
                               min-width: 200px;
                               max-width: 200px;
                               white-space: normal;
                               font-size: 16px;
                               line-height: 22px;
                               font-weight: normal;
                               color: rgba(0, 0, 0, 1.00);">
                      <div class="col-md-12 col-xs-12 p-0 contenedorPresentaciones">
                        <div class="col-md-6 col-sm-6 col-xs-12 p-0">
                          <p class="text-otrasPresentaciones">Otras presentaciones</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 p-0">
                          <div class="select1 text-negrp3">
                              <select id="selectPres">
                                  <option selected disabled>Presentaciones:</option>
                                  <?php
                                  $pC = count($presentaciones);
                                  for($i = 0; $i<$pC; $i++){
                                  ?>
                                    <option value="<?php echo $presentaciones[$i]->id; ?>"><?php echo $presentaciones[$i]->tipo." ".$presentaciones[$i]->militraje; ?></option>
                                  <?php  
                                  }
                                  ?>
                              </select>
                            </div>
                        </div>
                    </div>
                  </div>
                  
                <!-- LAYER NR. 5 -->
                <div class="tp-caption tp-resizeme filson" id="rs-1-layer-5"
                       data-x="['middle']"
                        data-hoffset="['260', '260', '0']"
                        data-y="['bottom']"
                        data-voffset="['100','130',70','52']"
                        data-width="['360']"
                        data-height="['auto']"
                        data-transform_idle="o:1;s:500"
                        data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                        data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1800"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 5;
                               min-width: 200px;
                               max-width: 200px;
                               white-space: normal;
                               font-size: 16px;
                               line-height: 22px;
                               font-weight: normal;
                               color: rgba(0, 0, 0, 1.00);">
                      <div class="col-md-12 col-sm-12 col-xs-12 p-0">
                        <div class="col-md-6 col-sm-6 col-xs-9 p-0">
                            <a class="btn btn-colored btn-lg btn-donde text-uppercase filson-bold" href="distribucion.php">¿Dónde comprar?</a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-3 pl-20 pr-0">
                            <a class="" href="#"><img class="share" src="images/iconos/compartir.png" alt="Compartir"></a>
                        </div>
                    </div>
                  </div>
                  
              </li>
            </ul>
          </div><!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            var revapi = $("#slider1").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                  arrows: {
                      style: "zeus",
                      enable: false,
                      hide_onmobile: true,
                      hide_under:600,
                      hide_onleave: true,
                      hide_delay: 200,
                      hide_delay_mobile: 1200,
                      tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                      left: {
                          h_align: "left",
                          v_align: "center",
                          h_offset: 30,
                          v_offset: 0
                      },
                      right: {
                          h_align: "right",
                          v_align: "center",
                          h_offset: 30,
                          v_offset: 0
                      }
                  },
                    bullets: {
                    enable:false,
                    hide_onmobile:true,
                    hide_under:1024,
                    style:"hephaistos",
                    hide_onleave:false,
                    direction:"vertical",
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0,
                    space:5,
                    tmp:''
                }
              },
              responsiveLevels: [1240, 1024, 778, 400],
              visibilityLevels: [1240, 1024, 778, 450],
              gridwidth: [1170, 1024, 878, 480],
              gridheight: [600, 668, 1200, 980],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->

      </div>
    </section>
      
    <!-- Section: Doctors -->
    <section id="" class="contenedorFiltrosPadre contenedorCaracteristicasP">
      <div class="container">
        <div class="row m-0">
          <div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-ms-offset-1 col-xs-offset-1 p-0">
            <?php
            $specsC = count($specs);
            for($i = 0; $i<$specsC; $i++){              
            ?>
              <div class="col-md-3 col-xs-6 col-sm-3 mb-40">
                  <img class="cateogiraPadre mb-30" src="<?php echo $urlImg.$specs[$i]->url_imagen; ?>" alt="<?php echo $specs[$i]->spec; ?>">
                  <p class="textCategoriaPadre text-negro3 filson text-center mb-5 mt-5">
                    <?php echo $specs[$i]->spec; ?>
                  </p>
              </div>
              <?php
            }
              ?>
          </div>
        </div>
      </div>
    </section>
      
    <section id="" class="contenedorTablaN" style="display: none;">
          <div class="container bg-gris">
              <div class="section-title text-center">
                  <div class="row m-0">
                    <div class="col-md-8 col-md-offset-2">
                      <h2 class="text-cremaF2 mt-0 mb-0 filson-medium font-22 line-height-1">Información nutrimental</h2>
                        <h3 class="text-uppercase text-negro2 font-10 filson mt-5 mb-0">Por porción de 240 ml</h3>
                    </div>
                  </div>
              </div>
              <div class="row m-0">
                   <div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-ms-offset-1 col-xs-offset-1 p-0 contenedorNutrimental">
                       <div class="col-md-6 col-sm-6 col-xs-12 contenedorTablaEsenciales">
                           <div class="col-md-12 col-sm-12 col-xs-12 tablaEsenciales">
                               <div class="col-md-6 col-sm-6 col-xs-6 p-0">
                                   <h3 class="text-center filson-bold font-20 mb-0">140,4 kcal</h3>
                                   <h4 class="text-center notoserif text-cremaF font-16 mt-0">Energía</h4>
                               </div>
                               <div class="col-md-6 col-sm-6 col-xs-6 p-0">
                                   <h3 class="text-center filson-bold font-20 mb-0">28,5%</h3>
                                   <h4 class="text-center notoserif text-cremaF font-16 mt-0">Calcio</h4>
                               </div>
                               <div class="col-md-6 col-sm-6 col-xs-6 p-0">
                                   <h3 class="text-center filson-bold font-20 mb-0">7,2g</h3>
                                   <h4 class="text-center notoserif text-cremaF font-16 mt-0">Proteína</h4>
                               </div>
                               <div class="col-md-6 col-sm-6 col-xs-6 p-0">
                                   <h3 class="text-center filson-bold font-20 mb-0">19.7%</h3>
                                   <h4 class="text-center notoserif text-cremaF font-16 mt-0">Vitamina A</h4>
                               </div>
                               <div class="col-md-6 col-sm-6 col-xs-6 p-0">
                                   <h3 class="text-center filson-bold font-20 mb-0">26.4%</h3>
                                   <h4 class="text-center notoserif text-cremaF font-16 mt-0">Vitamina D</h4>
                               </div>
                               <div class="col-md-6 col-sm-6 col-xs-6 p-0">
                                   <h3 class="text-center filson-bold font-20 mb-0">11.7g</h3>
                                   <h4 class="text-center notoserif text-cremaF font-16 mt-0">Carbohidratos</h4>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-6 col-sm-6 col-xs-12 p-0">
                           <div class="col-md-12 p-0"> 
                               <table class="table tablaPorciones">
                                   <tbody>
                                       <tr>
                                           <td class="contenidoEnergetico filson-bold descripcionEnergetica">Contenido Energético</td><td class="contenidoEnergetico porcion">587,7 kJ (140,4 kcal)</td> 
                                       </tr> 
                                       <tr class="carbo1">
                                           <td class="descripcionEnergetica filson-bold">Carbohidratos Totales</td> <td></td> 
                                       </tr> 
                                       <tr class="carbohidratos"> 
                                           <td class="descripcionEnergetica filson-bold">(Hidratos de Carbono)</td> <td class="porcion">11,7 g</td>  
                                       </tr> 
                                       <tr class="carbohidratos"> 
                                           <td class="descripcionEnergetica">Azúcares (Lactosa)</td> <td class="porcion">11,7 g</td> 
                                       </tr> 
                                       <tr> 
                                           <td class="descripcionEnergetica filson-bold">Fibra Dietética</td> <td class="porcion">0 g</td> 
                                       </tr> 
                                       <tr> 
                                           <td class="descripcionEnergetica filson-bold">Proteínas</td> <td class="porcion">7,2 g</td> 
                                       </tr> 
                                       <tr class="grasas"> 
                                           <td class="descripcionEnergetica filson-bold">Grasas Totales (Lípidos)</td> <td class="porcion">7,2 g</td> 
                                       </tr> 
                                       <tr class="grasas"> 
                                           <td class="descripcionEnergetica">Grasa Saturada</td> <td class="porcion">1,68 g</td> 
                                       </tr> 
                                       <tr class="grasas"> 
                                           <td class="descripcionEnergetica">Grasa Poliinsaturada</td> <td class="porcion">0,48 g</td> 
                                       </tr> 
                                       <tr class="grasas"> 
                                           <td class="descripcionEnergetica">Grasa Monoinsaturada</td> <td class="porcion">2,04 g</td> 
                                       </tr> 
                                       <tr class="grasas"> 
                                           <td class="descripcionEnergetica">Ácidos grasos trans</td> <td class="porcion">0,28 g</td> 
                                       </tr> 
                                       <tr class="grasas"> 
                                           <td class="descripcionEnergetica">Colesterol</td> <td class="porcion">30 mg</td> 
                                       </tr> 
                                       <tr> 
                                           <td class="descripcionEnergetica filson-bold">Sodio</td> <td class="porcion">150 mg</td> 
                                       </tr> 
                                       <tr> 
                                           <td class="descripcionEnergetica filson-bold">Calcio</td> <td class="porcion">257 gm(28.5%*)</td> 
                                       </tr> 
                                       <tr class="vitaminas"> 
                                           <td class="descripcionEnergetica filson-bold">Vitamina A<br> 
                                               <span class="filson hidden-xs">Equivalentes de retinol
                                               (373,9 UI Vitamina A)</span>
                                           </td> <td class="porcion">112,17 ug(19.7%*)</td> 
                                       </tr>
                                       <tr class="vitaminas"> 
                                           <td class="descripcionEnergetica filson-bold">Vitamina D<br>
                                               <span class="filson hidden-xs">(59,2 UI Vitamina D)</span>
                                           </td> <td class="porcion">1,48 ug(26.4%*)</td> 
                                       </tr> 
                                   </tbody> 
                               </table>
                           </div>
                       </div>
                       <div class="col-md-12 col-sm-12 col-xs-12">
                          <p class="textNorma"> *El porcentaje de valor nutrimental de referencia (VNR) está basado en los valores señalados en la NOM-051-SCFI/SSA1 -2010.</p>
                       </div>
                  </div>
              </div>
          </div>
    </section>
  <?php
  }//if del isset
  ?>
      
      <!--SI TIENE VÍDEO DE RECETA PONER EL VÍDEO, SINO PONER RECETAS RELACIONADAS CON EL PRODUCTO-->
    <section id="" class="contenedorRelacionados">
      <div class="container">
          <div class="section-title text-center">
              <div class="row m-0">
                  <div class="col-md-8 col-md-offset-2">
                      <h3 class="text-uppercase font-16 filson mb-0">con sello rojo</h3>
                      <h2 class="text-cremaF2 mt-0 notoserif line-height-1">¡Tú eres el chef!</h2>
                  </div>
              </div>
          </div>
          <div class="row m-0">
              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 p-0">
                  <iframe width="550" height="315" src="https://www.youtube.com/embed/oYS3U1TF5Gg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="col-md-4 col-md-offset-4 col-ms-4 col-ms-offset-4 col-xs-6 col-xs-offset-3 mt-20" style="display: none;">
                  <a class="btn btn-colored btn-lg btn-recetas1 text-uppercase filson-bold" href="#">Ver más recetas</a>
              </div>
          </div>
          <div class="row m-0">
              <div class="col-md-12 pt-20">
              <div id="carouselRecetas" class="owl-carousel owl-theme">
                
                <!-- ITEM 1 -->
                <div class="item">
                  <a class="text-negro2 filson-medium" href="detalle-cheescake.php">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/cheescake.png" alt="Cheescake" class="img-responsive imgReceta">
                      <div class="divTop">
                          <img class="tagReceta" src="images/iconos/recetas/tag-postres.png" alt="Tag postres">
                      </div>
                      <div class="divBottom">
                          <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                              <h4 class="text-center tituloReceta">Cheesecake de mandarina</h4>
                          </div>
                          <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                              <div class="col-md-6 col-ms-6 col-xs-6 pl-0 pr-0 contenedorTextoReceta">
                                  <img alt="Tiempo" class="iconosRecetas" src="images/iconos/recetas/reloj.png">
                                  <p class="textoReceta"><a class="text-negro2 filson-medium" href="#">35 min.</a></p>
                              </div>
                              <div class="col-md-6 col-ms-6 col-xs-6 pl-0 pr-0 contenedorTextoReceta1">
                                  <img alt="Porciones" class="iconosRecetas" src="images/iconos/recetas/porciones.png">
                                  <p class="textoReceta"><a class="text-negro2 filson-medium" href="#">8 porciones</a></p>
                              </div>
                          </div>
                      </div>
                    </article>
                  </a>
                </div>
                  
                  <!-- ITEM 2 -->
                  <div class="item">
                    <a class="text-negro2 filson-medium" href="detalle-chocolate.php">
                      <article class="post clearfix postReceta">
                          <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta">Chocolate blanco</h4>
                            </div>
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <div class="col-md-6 col-ms-6 col-xs-6 pl-0 pr-0 contenedorTextoReceta">
                                    <img alt="Tiempo" class="iconosRecetas" src="images/iconos/recetas/reloj.png">
                                    <p class="textoReceta"><a class="text-negro2 filson-medium" href="#">15 min.</a></p>
                                </div>
                                <div class="col-md-6 col-ms-6 col-xs-6 pl-0 pr-0 contenedorTextoReceta1">
                                    <img alt="Porciones" class="iconosRecetas" src="images/iconos/recetas/porciones.png">
                                    <p class="textoReceta"><a class="text-negro2 filson-medium" href="#">4 porciones</a></p>
                                </div>
                            </div>
                        </div>
                      </article>
                    </a>
                  </div>
                  
                  <!-- ITEM 3 -->
                  <div class="item">
                    <a class="text-negro2 filson-medium" href="detalle-chile.php">
                      <article class="post clearfix postReceta">
                          <img src="images/recetas/chile.png" alt="Chile en nogada" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-comidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta">Chile en nogada</h4>
                            </div>
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <div class="col-md-6 col-ms-6 col-xs-6 pl-0 pr-0 contenedorTextoReceta">
                                    <img alt="Tiempo" class="iconosRecetas" src="images/iconos/recetas/reloj.png">
                                    <p class="textoReceta"><a class="text-negro2 filson-medium" href="#">45 min.</a></p>
                                </div>
                                <div class="col-md-6 col-ms-6 col-xs-6 pl-0 pr-0 contenedorTextoReceta1">
                                    <img alt="Porciones" class="iconosRecetas" src="images/iconos/recetas/porciones.png">
                                    <p class="textoReceta"><a class="text-negro2 filson-medium" href="#">4 porciones</a></p>
                                </div>
                            </div>
                        </div>
                      </article>
                    </a>
                  </div>
                  
                  <!-- ITEM 4 -->
                  <div class="item">
                    <a class="text-negro2 filson-medium" href="detalle-gelatina.php">
                      <article class="post clearfix postReceta">
                          <img src="images/recetas/gelatina.png" alt="Gelatina" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-postres.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta">Gelatina mosaico</h4>
                            </div>
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <div class="col-md-6 col-ms-6 col-xs-6 pl-0 pr-0 contenedorTextoReceta">
                                    <img alt="Tiempo" class="iconosRecetas" src="images/iconos/recetas/reloj.png">
                                    <p class="textoReceta"><a class="text-negro2 filson-medium" href="#">45 min.</a></p>
                                </div>
                                <div class="col-md-6 col-ms-6 col-xs-6 pl-0 pr-0 contenedorTextoReceta1">
                                    <img alt="Porciones" class="iconosRecetas" src="images/iconos/recetas/porciones.png">
                                    <p class="textoReceta"><a class="text-negro2 filson-medium" href="#">10 porciones</a></p>
                                </div>
                            </div>
                        </div>
                      </article>
                    </a>
                  </div>
              </div>
            </div>
               <div class="col-md-4 col-md-offset-4 col-ms-4 col-ms-offset-4 col-xs-12 mt-20" style="display: none;">
                  <a class="btn btn-colored btn-lg btn-recetas1 text-uppercase filson-bold" href="#">Ver más recetas</a>
              </div>
          </div>
      </div>
    </section>
      
    <section id="" class="contenedorRelacionados">
      <div class="container">
          <div class="section-title text-center">
              <div class="row m-0">
                  <div class="col-md-8 col-md-offset-2">
                      <h2 class="text-cremaF2 mt-0 notoserif line-height-1">También te podría gustar</h2>
                  </div>
              </div>
          </div>
          <div class="row m-0">
              <div class="col-md-12 p-0 contenedorProRe">
                <?php
                $pC = count($productos);
                for($i = 0; $i<$pC; $i++){                    
                ?>
                  <div class="col-md-3 col-sm-4 col-xs-6">
                    <a class="text-negro2 notoserif" href="./detalle-producto.php?p=<?php echo $productos[$i]->pId; ?>&pre=<?php echo $productos[$i]->preId; ?>">
                      <article class="post clearfix postProducto">
                            <img src="<?php echo $urlImg.$productos[$i]->preUrlImg?>" alt="<?php echo $productos[$i]->pNombre.$productos[$i]->preMili; ?>" class="img-responsive imgProducto">
                          <div class="divTop">
                          </div>
                          <div class="divBottom">
                              <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                  <h4 class="text-center tituloProducto notoserif"><?php echo $productos[$i]->pNombre; ?></h4>
                                  <p class="descripcionProducto text-center text-negro2 filson"><?php echo $productos[$i]->preMili." ".$productos[$i]->prePresent." ".$productos[$i]->mTipo; ?></p>
                              </div>
                          </div>
                      </article>
                     </a>
                    </div>
                <?php
                }
                ?>
                    <!--<div class="col-md-3 col-sm-4 col-xs-6">
                        <article class="post clearfix postProducto">
                            <img src="images/productos/imgProducto/entera-1892ml.png" alt="Leche Entera 3% 1892mL" class="img-responsive imgProducto">
                            <div class="divTop">
                            </div>
                            <div class="divBottom">
                                <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                    <h4 class="text-center tituloProducto notoserif"><a class="text-negro2 notoserif" href="#">Leche entera 3%</a></h4>
                                    <p class="descripcionProducto text-center text-negro2 filson">1,892 mL Pasteurizada Polietileno</p>
                                </div>
                            </div>
                        </article>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <article class="post clearfix postProducto">
                              <img src="images/productos/imgProducto/entera-1892ml.png" alt="Leche Entera 3% 1892mL" class="img-responsive imgProducto">
                            <div class="divTop">
                            </div>
                            <div class="divBottom">
                                <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                    <h4 class="text-center tituloProducto notoserif"><a class="text-negro2 notoserif" href="#">Leche entera 3%</a></h4>
                                    <p class="descripcionProducto text-center text-negro2 filson">1,892 mL Pasteurizada Polietileno</p>
                                </div>
                            </div>
                          </article>
                      </div>
                      <div class="col-md-3 col-sm-4 col-xs-6">
                        <article class="post clearfix postProducto">
                            <img src="images/productos/imgProducto/entera-1892ml.png" alt="Leche Entera 3% 1892mL" class="img-responsive imgProducto">
                            <div class="divTop">
                            </div>
                            <div class="divBottom">
                                <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                    <h4 class="text-center tituloProducto notoserif"><a class="text-negro2 notoserif" href="#">Leche entera 3%</a></h4>
                                    <p class="descripcionProducto text-center text-negro2 filson">1,892 mL Pasteurizada Polietileno</p>
                                </div>
                            </div>
                        </article>
                  </div>-->
              </div>
          </div>
      </div>
    </section>
      
 <?php
    include "footer.html";
    ?>
      
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- end main-content -->
  </div>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
        <!--<script >
        $('#carouselRecetas').owlCarousel({
            loop:true,
            autoplay: true,
            autoplayTimeout: 9000,
            autoplaySpeed: 3000,
            margin:10,
            nav:false,
            dots: false,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:4,
                    nav:false
                },
                600:{
                    items:1,
                    nav:false
                },
                700:{
                    items:2,
                    nav:false
                },
                800:{
                    items:3,
                    nav:false,
                    loop:false
                }
            }
        })
    </script>-->
    
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay: true,
            autoplayTimeout: 9000,
            autoplaySpeed: 3000,
            nav:false,
            dots: false,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:4,
                    nav:false,
                    loop:false
                }
            }
        })
    </script>
   
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>