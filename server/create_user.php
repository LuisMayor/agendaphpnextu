?php
    require('data_access.php');

    $query = "INSERT INTO usuarios (Email, NombreC, Password, FechaNac) VALUES " .
             "('luis@gmail.com', 'Luis Mayor', '" . password_hash("12345", PASSWORD_DEFAULT) . "', '1985-02-13'), " . 
             "('yusbely@gmail.com', 'Yusbely Rodriguez', '" . password_hash("12345", PASSWORD_DEFAULT) . "', '1990-06-23'), " .
             "('jose@gmail.com', 'Jose Ortiz', '" . password_hash("12345", PASSWORD_DEFAULT) . "', '1977-08-09')";

    $oAgenda = new dataAccess();

    if(($resul = $oAgenda->updateData($query, "ingresar")) === "OK"){
        echo "<b>LOS USUARIOS FUERON REGISTRADOS SATISFACTORIAMENTE</b>";
    }
    else {
        echo "<b>" . $resul . "</b>";
    }
 ?>

