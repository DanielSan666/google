<?php
include_once("clienteUsuario.php");
        $id=$_REQUEST['id'];
        $payload = json_encode(array("id"=> $id));
        $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://127.0.0.1/google/api_restful/controllers/Usuario.php?op=delete",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true, 
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));
    $response = curl_exec($curl);

    curl_close($curl);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
<?php
    if ($response){
        ?>
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Se eliminó el registro correctamente',
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            location.href = 'clienteUsuario.php';
        });
  </script>
    <?php
    }else {
        ?>
        <script>
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'No se pudo eliminar',
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            location.href = 'clienteUsuario.php';
        });
  </script>
    <?php
    
}
    ?>
</body>
</html>