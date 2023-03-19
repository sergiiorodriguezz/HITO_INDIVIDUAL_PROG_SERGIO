<?php 
    if(isset($_POST['acction'])) {
        $valor = $_POST['acction']; #action para saber si registrar, eliminar o modificar un registro
        echo "El valor de acction es: " . $valor;# mostrar por pantalla el valor de acction
    
        require('class_usuarios.php');
        $usuario = new Usuario();
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        
        $resultado = $usuario->insert($nombre, $apellidos, $password, $email);
                
        if ($resultado == 'OK'){
            header("Location:../login.html");
        }else{
            echo 'Algo a fallado';
        }
    } else {
        echo "Algo ha ido mal.";
    }