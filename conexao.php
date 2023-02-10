<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "musicas";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
    echo "falha na Conexão: (".$mysqli->connect_errno.")" .$mysqli->connect_error;
?>