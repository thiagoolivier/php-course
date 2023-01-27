<?php

$dir1 = "folder_01";
$dir2 = "folder_02";


if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

$file1 = $dir1 . DIRECTORY_SEPARATOR . $filename;
$file2 = $dir2 . DIRECTORY_SEPARATOR . $filename;

if (!file_exists($file1)) {
    
    $file = fopen($file1, "w+");

    fwrite($file, date("Y-m-d H:i:s"));

    fclose($file);

}


if (file_exists($file2)) {
    echo "O arquivo já existe";
} else {
    rename($file1, $file2);
    echo "Arquivo movido de <strong>" . $dir1 . DIRECTORY_SEPARATOR . "</strong> para <strong>" . $dir2 . DIRECTORY_SEPARATOR . "</strong> com sucesso";
}

?>