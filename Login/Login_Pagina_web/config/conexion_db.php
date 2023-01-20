<?php 
    // ------------- Conexión a la Base de Datos de phpmyadmin --------------------
    $servername = "localhost"; // ---> localhost o la IP
    $database = "login"; // ---> nombre de la Base de Datos
    $username = "root"; // ---> usuario para ingresar 
    $password = ""; // ---> Contraseña para ingresar 

    $enlance = mysqli_connect($servername,$username,$password,$database);

    if(!$enlance){
        die("Conexion fallida: " . mysqli_connect_error());
    }
    echo "Conexion exitosa";
    mysqli_close($enlance);
?>