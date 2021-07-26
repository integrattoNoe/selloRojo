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
    </style>
    
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
    <section id="home" class="divider">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>

              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/banner/banner-provicional.jpg"  alt="Banner Receta"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <!-- LAYERS -->
              </li>
            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            var revapi = $(".rev_slider").revolution({
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
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [600, 668, 860, 620],
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
              stopAtSlide: 1,
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

      
    <!-- Section: Categorías -->
    <section id="" class="contenedorFiltrosPadre bg-gris">
      <div class="container">
        <div class="row m-0">
          <div class="col-md-10 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0 col-md-offset-1 p-0">
              <div id="carouselPadre" class="socios owl-carousel owl-theme" data-dots="false" data-nav="true">
                  <div class="item">
                      <a href="#"><img class="cateogiraPadre" src="images/recetas/categorias/botanas.png" alt="Categoría botanas"></a>
                      <p class="textCategoriaPadre text-negro3 filson-medium text-center mb-5 mt-5">Botanas</p>
                  </div>
                  <div class="item">
                      <a href="#"><img class="cateogiraPadre" src="images/recetas/categorias/ensaladas.png" alt="Categoría ensaladas"></a>
                      <p class="textCategoriaPadre filson-medium text-negro3 text-center mb-5 mt-5">Ensaladas</p>
                    </div>
                    <div class="item">
                        <a href="#"><img class="cateogiraPadre" src="images/recetas/categorias/sopas.png" alt="Categoría sopas"></a>
                        <p class="textCategoriaPadre filson-medium text-negro3 text-center mb-5 mt-5">Sopas</p>
                    </div>
                    <div class="item">
                        <a href="#"><img class="cateogiraPadre" src="images/recetas/categorias/fuertes.png" alt="Categoría fuertes"></a>
                        <p class="textCategoriaPadre filson-medium text-negro3 text-center mb-5 mt-5">Fuertes</p>
                    </div>
                    <div class="item">
                        <a href="#"><img class="cateogiraPadre" src="images/recetas/categorias/postres.png" alt="Categoría postres"></a>
                        <p class="textCategoriaPadre filson-medium text-negro3 text-center mb-5 mt-5">Postres</p>
                    </div>
                    <div class="item">
                        <a href="#"><img class="cateogiraPadre" src="images/recetas/categorias/bebidas.png" alt="Categoría bebidas"></a>
                        <p class="textCategoriaPadre filson-medium text-negro3 text-center mb-5 mt-5">Bebidas</p>
                    </div>
                    <div class="item">
                        <a href="#"><img class="cateogiraPadre" src="images/recetas/categorias/vegetarianas.png" alt="Categoría vegetarianas"></a>
                        <p class="textCategoriaPadre text-negro3 filson-medium text-center mb-5 mt-5">
                        Vegetarianas</p>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </section>
      
<section id="" class="contenedorRecetas">
      <div class="container">
        <div class="row m-0">
          <div class="col-md-12 p-0">
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
              <div class="col-md-3 col-sm-4 col-xs-12 mb-10">
                <a href="">
                    <article class="post clearfix postReceta">
                        <img src="images/recetas/chocolate.png" alt="Cocolate Blanco" class="img-responsive imgReceta">
                        <div class="divTop">
                            <img class="tagReceta" src="images/iconos/recetas/tag-bebidas.png" alt="Tag postres">
                        </div>
                        <div class="divBottom">
                            <div class="col-md-12 col-ms-12 col-xs-12 event-content flip p-0">
                                <h4 class="text-center tituloReceta"><a class="text-negro2 filson" href="#">Chocolate blanco</a></h4>
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
    <script>
        $('#carouselHijo').owlCarousel({
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
                    items:6
                }
            }
        })
    </script>
    <script>
        $('#carouselPadre').owlCarousel({
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
                    items:5,
                    nav:true,
                    navText: ["<p></p>","<p></p>"]
                },
                600:{
                    items:4,
                    nav:true,
                    navText: ["<p></p>","<p></p>"]
                },
                700:{
                    items:7,
                    nav:false,
                    navText: ["<p></p>","<p></p>"]
                },
                1000:{
                    items:7,
                    nav:false,
                    navText: ["<p></p>","<p></p>"]
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
<script async type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>