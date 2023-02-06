<form method="POST">

    <input type="text" name="busca">
    <button type="submit">Enviar</button>

</form>


<?php

$_POST['busca'] = "<strong>TESTE</strong><script>alert('ok')</script>";

if (isset($_POST['busca'])) 
{

    //echo strip_tags($_POST['busca'], "<strong><a>");
    echo htmlentities($_POST['busca']);

}


?>