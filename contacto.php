<?php
    $db = mysqli_connect("localhost","root","","contactos");

    if (isset($_POST['boton'])) {
        if(strlen($_POST['Nombre']) >= 1 && strlen($_POST['Email']) >= 1) {
            $nombre = trim($_POST['Nombre']);
            $email = trim($_POST['Email']);
            $comentario = trim($_POST['comentario']);
            $consulta = "INSERT INTO datos(nombre, email, comentario) VALUES ('$nombre','$email','$comentario')";
            $resultado = mysqli_query($db, $consulta);
    
             }

        }
?>