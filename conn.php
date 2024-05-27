<?php 

require 'vendor/autoload.php';

$dotenv= Dotenv\Dotenv::createImmutable(__DIR__.'/');
$dotenv->load();


//Configuración.s
$ServerName = $_ENV['BD_SERVIDOR'];
$Username = $_ENV['BD_USSERNAME'];
$PassWord = $_ENV['BD_PASSWORD'];
$DataBase = $_ENV['BD_NAME'];    

//Creamos conexión.
$con = new mysqli($ServerName, $Username, $PassWord, $DataBase);

//Comprobamos conexión.
if ($con->connect_error) {
    exit("La conexión fallo: " . $con->connect_error);
}

//Caracteres UTF-8 para MySQL.
if (!$con->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $con->error);
    exit();
}
?>