<?php

if (!empty($_POST['name']) AND !empty($_POST['password']) ) {

    require_once("class_usuarios.php");
    $usuario = new Usuario();
    $nombre = $_POST['name'];
    $password = $_POST['password'];

     //Busqueda en la base de datos del usuario

    $recordset = $usuario->getUserByPassword($nombre, $password);

    $numfilas = $recordset->num_rows;

    if ($numfilas <> 0){
        header("Location: ../vista/form_post.php");
    }else{
        echo 'Usuario no existe';
        header("Location:../login.html");

    }


} else{
    echo 'no hay valor en nombre y pass';
}
?>