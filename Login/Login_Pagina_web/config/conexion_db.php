<?php 
    // ------------- Conexión a la Base de Datos de phpmyadmin --------------------
    $servername = "localhost"; // ---> localhost o la IP
    $database = "database"; // ---> nombre de la Base de Datos
    $username = "username"; // ---> usuario para ingresar 
    $password = "password"; // ---> Contraseña para ingresar 

    $enlance = mysqli_connect($servername,$username,$password,$database);

    if(!$enlance){
        die("Conexion exitosa: " . mysqli_connect_error());
    }
    echo "Conexion fallida";
    mysqli_close($enlance);
?>