<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "password");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$userId = 2;

$stmt->execute(array($userId));

// $conn->rollBack();
$conn->commit();

echo "Delete ok";