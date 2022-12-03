<?php

//CREAR EL CONTROLADOR QUE SE COMUNIQUE CON EL MODELO PARA ACCEDER A LO METODOS DEL MODELO ATRAVES DE LOS END POINT

//AGREGAR LA SIG. LINEA PARA QUE LA APLI. SEPE QUE SE UTILIZARAN JSON
header('Content-Type:application/json');

require_once("../config/conexion.php");
require_once("../models/Usuario.php");

//CREAR UN OBJETO DE TIPO Usuario PARA INSTANCIAR LOS METODOS DEL MODELO

$Usuario=new Usuario();

//RECIBIR LA INFORMACIÓN EN JSON QUE HAY QUE PREPARAR EN EL OBJETO BODY

$body=json_decode(file_get_contents("php://input"),true);

//CREAR UN SWITCHPARA NAVEGAR ENTRE LOS DIFERENTES SERVICIOS QUE OFRECE EL API ATRAVES DE LOS END POINT
switch($_GET["op"])
    {
        //CASE ES PARA REGRRESAR TODOS LOS REGISTROS DE Usuario
         case "selectall": $datos=$Usuario->getUsuario();
                            echo json_encode($datos);
                            break;

        //CASE ES PARA REGRRESAR UN REGISTRO DE Usuario
         case "selectid": $datos=$Usuario->getUsuario_id($body["id"]);
                            echo json_encode($datos);
                            break;

         //CASE ES PARA INSERTAR UN REGISTRO DE Usuario
         case "insert": $datos=$Usuario->postUsuario($body["nombre"],$body["fecha"],$body["duracion"]);
                            echo json_encode("Registro con Insertado con Exito");
                            break;

        //CASE ES PARA Actualizar UN REGISTRO DE Usuario
         case "update": $datos=$Usuario->putUsuario($body["nombre"],$body["fecha"],$body["duracion"],$body["id"]);
                            echo json_encode("Registro con Actualizado con Exito");
                            break;

        //CASE ES PARA Actualizar UN REGISTRO DE Usuario
        case "delete": $datos=$Usuario->deleteUsuario($body["id"]);
                            echo json_encode("Registro con Eliminado con Exito");
                            break;
    }

?>