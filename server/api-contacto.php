<?php

/*Uso de librerías para el envío de correos*/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "Exception.php";
require "PHPMailer.php";
require "SMTP.php";


date_default_timezone_set('America/Mexico_City');

$asunto = $_POST["asunto"];
$distribuidora = $_POST["distribuidora"];
$correoDestino = "";
switch($asunto){
    case "Venta De Producto Para Mi Negocio":
        $correoDestino = "ysanchez@sellorojo.com.mx";
        break;
    case "Eventos":
        $correoDestino = "denriquez@sellorojo.com.mx";
        break;
    case "Patrocinios":
        $correoDestino = "denriquez@sellorojo.com.mx";
        break;
    case "Facturación":
        $correoDestino = "gsanchez@sellorojo.com.mx";
        break;
    case "Maquinas Despachadoras":
        $correoDestino = "mgarnica@sellorojo.com.mx";
        break;
    case "Prácticas Profesionales":
        $correoDestino = "reclutamiento@sellorojo.com.mx";
        break;
    case "Proveedores":
        $correoDestino = "cdiaz@sellorojo.com.mx";
        break;
    default:
        switch($distribuidora){
            case "Aguascalientes":
                $correoDestino = "pavillanueva@sellorojo.com.mx";
                break;
            case "Colima":
                $correoDestino = "jbpaz@sellorojo.com.mx";
                break;
            case "Manzanillo":
                $correoDestino = "jbpaz@sellorojo.com.mx";
                break;
            case "Tecoman":
                $correoDestino = "jbpaz@sellorojo.com.mx";
                break;
            case "Naucalpan":
                $correoDestino = "laaguilar@sellorojo.com.mx";
                break;
            case "Toluca":
                $correoDestino = "laaguilar@sellorojo.com.mx";
                break;
            case "Celaya":
                $correoDestino = "pavillanueva@sellorojo.com.mx";
                break;
            case "Irapuato":
                $correoDestino = "pavillanueva@sellorojo.com.mx";
            case "Leon":
                $correoDestino = "pavillanueva@sellorojo.com.mx";
                break;
            case "Manuel Doblado":
                $correoDestino = "pavillanueva@sellorojo.com.mx";
                break;
            case "Acatlan":
                $correoDestino = "jbpaz@sellorojo.com.mx";
                break;
            case "Autlan":
                $correoDestino = "jbpaz@sellorojo.com.mx";
                break;
            case "Ciudad Guzman":
                $correoDestino = "jbpaz@sellorojo.com.mx";
                break;
            case "Ocotlan":
                $correoDestino = "jbpaz@sellorojo.com.mx";
                break;
            case "San Patricio Melaque":
                $correoDestino = "jbpaz@sellorojo.com.mx";
                break;
            case "Tepatitlan":
                $correoDestino = "jbpaz@sellorojo.com.mx";
                break;
            case "Ameca":
                $correoDestino = "kvazquez@sellorojo.com.mx";
                break; 
            case "Guadalajara":
                $correoDestino = "kvazquez@sellorojo.com.mx";
                break;
            case "Zapotlanejo":
                $correoDestino = "kvazquez@sellorojo.com.mx";
                break;
            case "Puerto Vallarta":
                $correoDestino = "aamora@sellorojo.com.mx";
                break;
            case "Tomatlan":
                $correoDestino = "aamora@sellorojo.com.mx";
                break;
            case "Zapopan":
                $correoDestino = "kvazquez@sellorojo.com.mx";
                break;
            case "Tlajomulco":
                $correoDestino = "kvazquez@sellorojo.com.mx";
                break;
            case "Tonala":
                $correoDestino = "kvazquez@sellorojo.com.mx";
                break;
            case "Morelia":
                $correoDestino = "laaguilar@sellorojo.com.mx";
                break;
            case "Uruapan":
                $correoDestino = "laaguilar@sellorojo.com.mx";
                break;
            case "Zacapu":
                $correoDestino = "laaguilar@sellorojo.com.mx";
                break;
            case "Zitacuaro":
                $correoDestino = "laaguilar@sellorojo.com.mx";
                break;
            case "Apodaca":
                $correoDestino = "fjrodriguezr@sellorojo.com.mx";
                break;
            case "Linares":
                $correoDestino = "fjrodriguezr@sellorojo.com.mx";
                break;
            case "Acaponeta":
                $correoDestino = "aamora@sellorojo.com.mx";
                break;
            case "Ixtlan":
                $correoDestino = "aamora@sellorojo.com.mx";
                break;
            case "Las Varas":
                $correoDestino = "aamora@sellorojo.com.mx";
                break;
            case "Santiago":
                $correoDestino = "aamora@sellorojo.com.mx";
                break;
            case "Xalisco":
                $correoDestino = "aamora@sellorojo.com.mx";
                break;
            case "Ciudad Valles":
                $correoDestino = "fjrodriguezr@sellorojo.com.mx";
                break;
            case "Mazatlan":
                $correoDestino = "aamora@sellorojo.com.mx";
                break;
            case "Culiacan":
                $correoDestino = "aamora@sellorojo.com.mx";
                break;
            case "Guamuchil":
                $correoDestino = "aamora@sellorojo.com.mx";
                break;
            case "Rosario":
                $correoDestino = "aamora@sellorojo.com.mx";
                break;
            case "Zacatecas":
                $correoDestino = "aamora@sellorojo.com.mx";
                break;
            case "Jalpa":
                $correoDestino = "pavillanueva@sellorojo.com.mx";
                break;
            case "Jerez":
                $correoDestino = "pavillanueva@sellorojo.com.mx";
                break;
            case "Nochistlan":
                $correoDestino = "pavillanueva@sellorojo.com.mx";
                break;  
        }
        break;
}

if(isset($_POST["correo"])){
    //$mail = $_POST["email"];
    $mail = new PHPMailer(TRUE);

    /* Open the try/catch block. */
    try {
        $mail->setFrom("info@sellorojo.com", 'Contacto Sello Rojo');
        $mail->addAddress($correoDestino, 'Contacto Sello Rojo');
        if($asunto == "Facturación"){
            $mail->addAddress("mmrios@sellorojo.com.mx", 'Contacto Sello Rojo');
            $mail->addAddress("vramirez@sellorojo.com.mx", 'Contacto Sello Rojo');
        }
        $mail->addAddress("noe@integratto.com.mx", 'Contacto Sello Rojo');
        $mail->addAddress("aldom@integratto.com.mx", 'Contacto Sello Rojo');
        
       /* Set the subject. */
       $mail->Subject = $asunto;

       $mail->isHTML(TRUE);

       $mensaje = "<html><body style='width: 100%; margin:0;'>";
       $mensaje.= "<h2 style='font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'>Nombre: <span style='color: #00B6C5;'>".$_POST['nombre']."</span></h2>";
       $mensaje.= "<h2 style='font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'>Whatsapp: <span style='color: #00B6C5;'>".$_POST['whats']."</span></h2>";
       $mensaje.= "<h2 style='font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'>Correo: <span style='color: #00B6C5;'>".$_POST['correo']."</span></h2>";
       $mensaje.= "<h2 style='font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'>Distribuidora: <span style='color: #00B6C5;'>".$_POST['distName']."</span></h2>";
       $mensaje.= "<h2 style='font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'>Asunto: <span style='color: #00B6C5;'>".$asunto."</span></h2>";
       $mensaje.= "<h2 style='font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif'>Mensaje: <span style='color: #00B6C5;'>".$_POST['mensaje']."</span></h2>";
       $mensaje .= "</body><html>";
       /* Set the mail message body. */
       $mail->Body = $mensaje;

       /* Finally send the mail. */
       $mail->CharSet = 'UTF-8';
       if($mail->send())
           $resp["code"] = 200;
       else
           $resp["code"] = 400;
    }
    catch (Exception $e)
    {
       /* PHPMailer exception. */
       $resp["code"] = 400;
       $resp["msg"] = $e->errorMessage();
    }
    catch (\Exception $e)
    {
       /* PHP exception (note the backslash to select the global namespace Exception class). */
       $resp["code"] = 400;
       $resp["msg"] = $e->getMessage();
    }
    
}else{
    $resp["code"]=400;
    $resp["msg"] = "No se enviaron los datos solicitados";
}
responder($resp);


/*esta función solo retorna las respuestas a las peticiones, en un formato de json para acceder más fácil desde el front*/
function responder($respuesta){
   global $conexion;
   $conexion = null;
   header('Content-type: application/json');
   die(json_encode($respuesta));
}

?>
