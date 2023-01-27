<?php

$conn = new PDO("sqlsrv:database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "password123@T");

$statement = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_ASSOC);

$jsonResult = json_encode($results);

echo $jsonResult;

// foreach ($results as $row) {

//     foreach ($row as $key => $value) {

//         echo "<strong>". $key . ":</strong>" . $value . "<br/>";

//     }

//     echo "====================================================<br>";

// }
