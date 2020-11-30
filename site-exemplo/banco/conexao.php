<?php
$servidor="localhost";
$usuario="root"

try{
    $con= new PDO("mysql:host=$servidor;dbname=contatos", $usuario);
    $con->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão OK"; //remover posteriormente
} catch(PDOException $e){
    echo "Erro na conexão:".$e->getMessage();}
?>