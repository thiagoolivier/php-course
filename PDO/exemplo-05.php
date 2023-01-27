<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "password");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$userId = 1;

$stmt->bindParam(":ID", $userId);


$stmt->execute();

echo "Delete ok";