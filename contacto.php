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
        
        @media screen and (max-width: 770px){
            #homeDetalle .tp-bgimg{
                background-size: 100% 70% !important;
            }
        }
    </style>
    
    <script>
        $("#elementID").attr("placeholder", "New Value");

    </script>
    
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
  <div class="main-content pt-150">
      
      <!-- Contacto -->
      <section>
          <div class="container contenedorSocios">
            <h2 class="text-cremaF2 text-center mt-0 notoserif line-height-1 mb-5">Atención al cliente</h2>
              <h3 class="text-center font-15 filson mb-0 mt-0">¡Nos interesa escucharte! Déjanos tus datos para ponernos en contacto.</h3>
            <div class="row m-0">
              <div class="col-md-10 col-md-offset-1 col-sm-offset-1 col-sm-10 col-xs-12 pt-30">
                  <div class="col-md-7 col-md-push-5 p-0">
                      <div class="col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
                          <div class="widget domicilio">
                              <h5 class="widget-title text-cremaF filson-medium">Escríbenos</h5>
                                  <p style="line-height: 1.5" class="filson text-negro2">Envía tus comentarios directamente al área correspondiente.</p>
                              <div class="col-md-12 col-sm-12 col-xs-12 p-0">
                                  <form class="form-horizontal contenedorFormulario" id="formContacto" action="javascript:void(0);">
                                       <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" placeholder="Ej. Juan Pérez" name="nombre" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">Whatsapp</label>
                                        <div class="col-sm-9">
                                          <input type="tel" class="form-control" placeholder="33 33333333" name="whats" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">Correo</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" placeholder="Ej. jperez@sellorojo.com.mx" name="correo" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label ">Distribuidora</label>
                                        <div class="col-sm-9">
                                            <div class="select1 text-negrp3">
                                              <select class="form-control selectContacto" required name="distribuidora" id="distribuidora">
                                                    <option selected disabled>Selecciona...</option>
                                                    <option value="Aguascalientes">Aguascalientes, Ags.</option>
                                                    <option value="Colima">Colima, Col.</option>
                                                    <option value="Manzanillo">Manzanillo, Col.</option>
                                                    <option value="Tecoman">Tecomán, Col.</option>
                                                    <option value="Naucalpan">Naucalpan, Edo. Méx.&ZeroWidthSpace;</option>
                                                    <option value="Toluca">Toluca, Edo. Méx.&ZeroWidthSpace;</option>
                                                    <option value="Celaya">Celaya, Gto.</option>
                                                    <option value="Irapuato">Irapuato, Gto.</option>
                                                    <option value="Leon">León, Gto.</option>
                                                    <option value="Manuel Doblado">Manuel Doblado, Gto.</option>
                                                    <option value="Acatlan">Acatlán, Jal.</option>
                                                    <option value="Autlan">Autlán, Jal.</option>
                                                    <option value="Ciudad Guzman">Ciudad Guzmán, Jal.</option>
                                                    <option value="Ocotlan">Ocotlán, Jal.</option>
                                                    <option value="San Patricio Melaque">San Patricio Melaque , Jal.</option>
                                                    <option value="Tepatitlan">Tepatitlán, Jal.</option>
                                                    <option value="Ameca">Ameca, Jal.</option>
                                                    <option value="Guadalajara">Guadalajara, Jal.</option>
                                                    <option value="Zapotlanejo">Zapotlanejo, Jal.</option>
                                                    <option value="Puerto Vallarta">Puerto Vallarta, Jal.</option>
                                                    <option value="Tomatlan">Tomatlán, Jal</option>
                                                    <option value="Zapopan">Zapopan, Jal.</option>
                                                    <option value="Tlajomulco">Tlajomulco, Jal.</option>
                                                    <option value="Tonala">Tonalá, Jal.</option>
                                                    <option value="Morelia">Morelia, Mich.</option>
                                                    <option value="Uruapan">Uruapan, Mich.</option>
                                                    <option value="Zacapu">Zacapu, Mich.</option>
                                                    <option value="Zitacuaro">Zitácuaro, Mich.</option>
                                                    <option value="Apodaca">Apodaca, N.L.</option>
                                                    <option value="Linares">Linares, N.L.</option>
                                                    <option value="Acaponeta">Acaponeta, Nay.</option>
                                                    <option value="Ixtlan">Ixtlán, Nay.</option>
                                                    <option value="Las Varas">Las Varas, Nay.</option>
                                                    <option value="Santiago">Santiago, Nay.</option>
                                                    <option value="Xalisco">Xalisco, Nay.</option>
                                                    <option value="Ciudad Valles">Ciudad Valles, S.L.P</option>
                                                    <option value="Mazatlan">Mazatlán, Sin.</option>
                                                    <option value="Culiacan">Culiacán, Sin.</option>
                                                    <option value="Guamuchil">Guamuchil, Sin.</option>
                                                    <option value="Rosario">Rosario, Sin.</option>
                                                    <option value="Zacatecas">Zacatecas, Zac.</option>
                                                    <option value="Jalpa">Jalpa, Zac.</option>
                                                    <option value="Jerez">Jerez, Zac.</option>
                                                    <option value="Nochistlan">Nochistlán, Zac.</option>
                                              </select>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Asunto</label>
                                        <div class="col-sm-9">
                                            <div class="select1 text-negrp3">
                                              <select class="form-control selectContacto" required name="asunto">
                                                    <option selected disabled>Selecciona...</option>
                                                    <option value="Reporte De Servicio">Reporte De Servicio</option>
                                                    <option value="Venta De Producto Para Mi Negocio">Venta De Producto Para Mi Negocio</option>
                                                    <option value="Reporte De Calidad De Producto">Reporte De Calidad De Producto</option>
                                                    <option value="Maquinas Despachadoras">Maquinas Despachadoras</option>
                                                    <option value="Soy Cliente Nuevo">Soy Cliente Nuevo</option>
                                                    <option value="Refrigeradores">Refrigeradores</option>
                                                    <option value="Reportar Unidad">Reportar Unidad</option>
                                                    <option value="Ventas A Gobierno E Instituciones">Ventas A Gobierno E Instituciones</option>
                                                    <option value="Facturación">Facturación</option>
                                                    <option value="Eventos">Eventos</option>
                                                    <option value="Responsabilidad Social">Responsabilidad Social</option>
                                                    <option value="Recursos Humanos">Recursos Humanos</option>
                                                    <option value="Prácticas Profesionales">Prácticas Profesionales</option>
                                                    <option value="Proveedores">Proveedores</option>
                                                    <option value="Patrocinios">Patrocinios</option>
                                                    <option value="Visitas Escolares">Visitas Escolares</option>
                                              </select>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label ">Mensaje</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control" rows="4" placeholder="¿Cómo podemos ayudarte?" name="mensaje" required></textarea>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <span class="gdpr-block pl-15">
                                            <label>
                                            <span class="textGDPR display-7" style="color: #777777"><input type="checkbox" name="gdpr" id="" class="mr-10" required>Acepto los términos y condiciones del <a style="color: #000; text-decoration: none;" href="aviso.php">Aviso de Privacidad</a></span>
                                            </label>
                                        </span>
                                      </div>
                                      <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" class="btn btn btn-colored filson-bold btn-lg btn-enviar">Enviar</button>
                                        </div>
                                      </div>
                                    </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-5 col-md-pull-8 contenedorMisello">
                      <div class="col-md-12 col-sm-12 col-xs-12 pl-20 pr-0">
                         <div class="col-sm-12 col-md-12 col-xs-12 corporativo pl-0">
                              <div class="widget domicilio">
                                <h5 class="widget-title text-cremaF filson-medium llamanos">Llámanos</h5>
                                  <p class="filson text-negro2">Para sugerencias, quejas y reportes comunícate a nuestra línea gratuita 8:00 AM a 5:00 PM.</p>
                                <div class="col-md-12 col-sm-12 col-xs-12 p-0">
                                    <a href="tel:+52018006473556"><div class="contenedorExtencion1"><p class="mb-0 filson-medium text-negro2 font-30 relative">01800<span class="text-cremaF">MISELLO</span></p><p class="extencion1 filson-medium text-gris mb-0">(6473556)</p></div></a>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 pl-20 pr-0 pt-5 mt-50 ml-0">
                          <div class="col-sm-12 col-md-12 col-xs-12 corporativo pl-0">
                              <div class="widget domicilio dm1">
                                <h5 class="widget-title text-cremaF filson-medium">Corporativo</h5>
                                <div class="col-md-12 col-sm-12 p-0">
                                    <p class="mb-0 filson text-negro2">Dr. R. Michel 2285</p>
                                    <p class="mb-0 filson text-negro2">Col. Jardines del Rosario</p>
                                    <p class="mb-0 filson text-negro2">Guadalajara, Jalisco, México.</p>
                                    <p class="mb-0 filson text-negro2">C.P. 44890 </p>
                                </div>
                                <div class="col-md-12 col-sm-12 p-0 contenedorTel">
                                    <div class="col-md-12 p-0">
                                        <img class="imgText" src="images/iconos/cel.png" alt="Celular"><p class="imgText filson text-negro2">33 1605 5265</p>
                                    </div>
                                    <div class="col-md-12 col-sm-12 p-0 contenedorMail">
                                        <img class="imgText" src="images/iconos/mail.png" alt="Mail"><p class="imgText filson text-negro2">hola@sellorojo.com.mx</p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 p-0">
                                    <ul class="styled-icons icon-dark icon-cremaF icon-circled icon-sm mt-10 icon-rosa">
                                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </section>
      
    <section id="" class="contenedorRelacionados">
      <div class="container-fluid pb-0">
          <div class="row m-0">
              <div class="col-md-12 p-0">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.7903795177012!2d-103.33423768406126!3d20.637399386211825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b243d75b8ff9%3A0xef1b4ba61476d9f5!2sSello+Rojo!5e0!3m2!1ses!2smx!4v1548435935013" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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


<script src="js/controladores/contacto.js"></script>


</body>
</html>