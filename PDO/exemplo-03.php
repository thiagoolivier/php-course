<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "password");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Dados inseridos no banco com sucesso.";

// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// $jsonResults = json_encode($results);

// echo $jsonResults;