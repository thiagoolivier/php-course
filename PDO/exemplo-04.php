<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "password");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$userLogin = "joao";
$userPassword = "qwerty";
$userId = 2;


$stmt->bindParam(":LOGIN", $userLogin);
$stmt->bindParam(":PASSWORD", $userPassword);
$stmt->bindParam(":ID", $userId);


$stmt->execute();

echo "alteração ok";