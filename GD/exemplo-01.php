<?php

header("Content-type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

$dirTeste = "imagens";

//cria um diretório /images caso ainda não exista
if (!is_dir($dirTeste)) {

    mkdir($dirTeste);

}

//cria uma file "teste_imagem.png" dentro de /imagens, caso não exista, e escreve os dados da imagem nele
if (!is_file("teste_imagem.png")) {

    fopen($dirTeste . DIRECTORY_SEPARATOR . "teste_imagem.png", "w+");
    imagepng($image, $dirTeste . DIRECTORY_SEPARATOR . "teste_imagem.png");

}

//cria uma imagem e renderiza na tela
imagepng($image);

imagedestroy($image);

?>