<?php
require __DIR__ . '/vendor/autoload.php';
$access_token = 'TEST-3570956981791826-110323-c8050666e0f085b518cb48901fedfcf0-1108532104';
MercadoPago\SDK::setAccessToken($access_token);
$preference = new MercadoPago\Preference();

$preference->back_urls = array(
    "success" => "http://localhost/google/planes.php",
    "failure" => "http://localhost/google/planes.php",
    "pending" => "http://localhost/google/planes.php"
);

$productos = [];
//Item 1
$item = new MercadoPago\Item();
$item->title = "Plan Básico";
$item->quantity = 1;
$item->unit_price = 139;

array_push($productos, $item);

$preference->items = $productos;
$preference->save();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="contenedor">
            <h2 class="logotipo">Monopoli Studios</h2>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="planes.php" class="activo">Planes</a>
                <a href="ubicacion.php">Ubicacion</a>
                <a href="/api_restful/consumer/clienteUsuario.php">Más Recientes</a>
                <a href="login.php">Cerrar sesión</a>
            </nav>
        </div>
    </header>
    <div>
        <h1 class="edit">Tipos de Planes</h1><br>
        <hr width="80%px" style="margin-left: 10%;"><br><br>
        <div class="table--responsive">
            <table border="0" class="table table--bordered">
                <thead>
                    <th>Planes</th>
                    <th>Características</th>
                    <th>Precio</th>
                </thead>
                <tbody>
                    <tr>
                        <th><a href="">Plan Básico</a></th>
                        <td>
                            <ul class="list--check">
                                <li>Buena calidad de vídeo</li>
                                <li>Resolución 720p</li>
                                <li>Sin anuncios</li>
                                <li>Multidispositivo</li>
                                <li>Permite descargas</li>
                            </ul>
                        </td>
                        <td>
                            $139 al mes
                            <br>
                            <div class="pago"></div>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="">Plan Estándar</a></th>
                        <td>
                            <ul class="list--check">
                                <li>Muy buena calidad de vídeo</li>
                                <li>Resolución 1080p</li>
                                <li>Sin anuncios</li>
                                <li>Multidispositivo</li>
                                <li>Permite descargas</li>
                            </ul>
                        </td>
                        <td>
                            $219 al mes <br><br>
                            <a class="btn-edit" onclick="message()"> Comprar </a>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="">Plan Premium</a></th>
                        <td>
                            <ul class="list--check">
                                <li>Óptima calidad de vídeo</li>
                                <li>Resolución 4K+HDR</li>
                                <li>Sin anuncios</li>
                                <li>Multidispositivo</li>
                                <li>Permite descargas</li>
                            </ul>
                        </td>
                        <td>
                            $299 al mes <br><br>
                            <a class="btn-edit" onclick="message()"> Comprar </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        const mp = new MercadoPago('TEST-431a7fca-e911-45a5-89ae-cdfd2c67cd9c');

        mp.checkout({
            preference: {
                id: '<?php echo $preference->id; ?>'
            },
            render: {
                container: '.pago',
                label: 'Comprar'
            }
        });
    </script>
    <script>
            <?php 
                
                // Update the path below to your autoload.php, 
                // see https://getcomposer.org/doc/01-basic-usage.md 

                require_once '/path/to/vendor/autoload.php'; 
                use twilio\Rest\Client; 
                function message (){

                
                
                
                $sid    = "AC1f636f0a14cf0f809ca62934ecc0f1a3"; 
                $token  = "[AuthToken]"; 
                $twilio = new Client($sid, $token); 
                
                $message = $twilio->messages 
                                ->create("+526182711456", // to 
                                        array(  
                                            "messagingServiceSid" => "MG94107fea1956c065696766a47d5b5314",      
                                            "body" => "Tu compra se esta realizando" 
                                        ) 
                                ); 
                print($message->sid);
            }
                ?>
    </script>
</body>

</html>