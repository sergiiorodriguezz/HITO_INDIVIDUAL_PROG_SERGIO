<?php

if (!empty($_POST['email'])) {

    require_once("class_usuarios.php");
    $usuario = new Usuario();
    $email = $_POST['email'];

    //Búsqueda en la base de datos del usuario
    $recordset = $usuario->getUserByEmail($email);

    $numfilas = $recordset->num_rows;

    if ($numfilas <> 0){
        
        if(isset($_POST['acction'])) {
            $valor = $_POST['acction']; #action para saber si registrar, eliminar o modificar un registro
            echo "El valor de acction es: " . $valor;# mostrar por pantalla el valor de acction
            require('class_post.php');
            $post = new post();
            switch($valor){
                case 'registrar': #registrar post
                    $email = $_POST['email'];
                    $titulo = $_POST['titulo'];
                    $contenido = $_POST['contenido'];
                    $fecha = $_POST['fecha'];
                    $imagen = $_POST['imagen'];
                    
                    $resultado = $post->insert($email, $titulo, $contenido, $fecha, $imagen);
                            
                    if ($resultado == 'OK'){
                        header("Location:../HitoGrupal_LdM-main/controlador/ver_post.php");
                    }else{
                        echo 'Algo ha fallado';
                    }
                    break;
                case 'borrar': #eliminar post
                    $id = $_POST['id'];
                    $resultado = $post->deletePostById($id); #utilizamos la funcion para eliminar el registro

                    if ($resultado == 'OK'){
                        header("Location:../HitoGrupal_LdM-main/controlador/ver_post.php");
                    }else{
                        echo 'Algo ha fallado';
                    }
                break;
            }
        } else {
            echo "Algo ha ido mal.";
        }
    } else {
        echo 'El Usuario '.$email.' no existe';
    }
} else {
    header("Location:../HitoGrupal_LdM-main/controlador/login.html");
}
