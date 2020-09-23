<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "test";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$conn) 
    {
	die("No hay conexion: ".mysqli_connect_error());
    }

    $Nombre = $_POST["txtusuario"];
    $Contra = $_POST["txtpassword"];

    $query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$Nombre."' and password = '".$Contra."'");
    $nr = mysqli_num_rows($query);


    if($nr == 1)
    {
        header("Location: Menu.html");
        echo "Bienvenido a mi calculadora" .$Nombre;
	
    }
        else if ($nr == 0) 
    {
	    header("Location: login.html");
    }
        echo "Usuario o Contrasenia son incorrectos :(";
?>