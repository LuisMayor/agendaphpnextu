<?php
    session_start();
    require('data_access.php');

    if(isset($_SESSION["email"])){
        $query = "UPDATE Eventos SET FechaIni = '" . $_POST['start_date'] . "', " . 
                 "FechaFin = '" . $_POST['end_date'] . "', HoraIni = '" . $_POST['start_hour'] .
                 "', HoraFin = '" .  $_POST['end_hour'] . "' WHERE id = " . $_POST['id'];

        $oAgenda =  new dataAccess();
        $response['msg'] = $oAgenda->updateData($query, "actualizar");

        echo json_encode($response);
    }
    else {
        echo "No se ha inciado sesión... redireccionando a la pagina de registro";
        header("Location: ../client/index.html");
    } 


 ?>

 


 ?>
