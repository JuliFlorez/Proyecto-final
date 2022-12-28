<?php
    $db = mysqli_connect("localhost","root","","contactos");

    if (isset($_POST['boton'])) {
        if(strlen($_POST['Nombre']) >= 1 && strlen($_POST['Email']) >= 1) {
            $Nombre = trim($_POST['Nombre']);
            $Apellido = trim($_POST['Apellido']);
            $Usuario = trim($_POST['Usuario']);
            $Ciudad = trim($_POST['Ciudad']);
            $ZIP = trim($_POST['ZIP']);
            $registro = "INSERT INTO registro(Nombre, Apelldio, Usuario, Ciudad, ZIP) VALUES ('$Nombre','$Apellido','$Usuario','$Ciudad','$ZIP')";
            $resultado = mysqli_query($db, $registro);
    
             }

        }
?>