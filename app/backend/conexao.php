<?php
$servername = "mysql-connection";
$username = "root";
$password = $_ENV["ROOT_PASSWORD"];
$database = $_ENV["MYSQL_DATABASE"];

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
