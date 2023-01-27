<?php

$link = "https://upload.wikimedia.org/wikipedia/commons/4/4d/Cat_November_2010-1a.jpg";

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);

$content = file_get_contents($link, false, stream_context_create($arrContextOptions));

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>" width="480px">