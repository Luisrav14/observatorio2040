<?php

$DB_server = "localhost";
$DB_user = "root";
$DB_passwd = "";
$DB_name = "observatorio";

try {
    $connection = mysqli_connect($DB_server, $DB_user, $DB_passwd, $DB_name);
} catch (\Throwable $th) {
    echo 'Error al conectar con la Base de Datos';
}
