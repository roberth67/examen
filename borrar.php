<?php
include_once 'includes/usuarios.php';

       $id_usuario = $_GET['id'];

       $usuario = new Usuario();
       $usuario->setId($id_usuario);
        
       $usuario->eliminarUsuario();
       
       header('Location: http://localhost/CRUD-NOMVC/');

?>