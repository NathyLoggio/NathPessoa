<?php
$id= null;
if(isset($_POST['editar'])){
    $id + $_POST['idUsuario'];
}
require_once '../controller/CUsuario.php';
$cadUser = new CUsuario();
$user = $cadUser->getUsuarioById($id);


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

    </body>
</html>