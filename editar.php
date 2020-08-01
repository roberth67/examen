<?php 
    include_once 'includes/usuarios.php';
    require_once 'config/parameters.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Usuarios</title>
</head>
<body>

<?php
include_once 'views/header.php';
include_once 'views/aside.php';

?>
<section class="main">
<form action="#" class="formulario" method="POST">
<h1>EDITAR USUARIO NUEVO</h1>

<?php
       $id_usuario = $_GET['id'];
       //echo $id_usuario;
       $usuario = new Usuario();
       $usuario->setId($id_usuario);
        
       $user = $usuario->getUsuarioUnico();
      
       foreach($user as $usr){
           $nombreUser = $usr['nombre'];
           $apellidoUser = $usr['apellido'];
           $edadUser = $usr['edad'];
           $telefonoUser = $usr['telefono'];
       }
       
?>
        <input type="text" name="id" id="id" readonly value="<?= $id_usuario ?>">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?=$nombreUser?>">
        <input type="text" name="apellido" id="apellido" placeholder="Apellido" value="<?= $apellidoUser?>">
        <input type="text" name="edad" id="edad" placeholder="Edad" value="<?= $edadUser?>">
        <input type="text" name="telefono" id="telefono" placeholder="Telefono" value="<?= $telefonoUser?>">
        <input type="submit" value="Enviar" class="btn-enviar">

</form>
<?php
        if(isset($_POST['nombre']) && isset($_POST['apellido'])){
            $usuario = new Usuario();
            $usuario->setId($_POST['id']);
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellido($_POST['apellido']);
            $usuario->setEdad($_POST['edad']);
            $usuario->setTelefono($_POST['telefono']);

            
            /*echo $usuario->getNombre();
            echo $usuario->getApellido();*/


            $usuario->editarUsuario();

            echo '<h3> Usuario editado con exito </h3>';
        }

        ?>
</div>
<?php
include_once 'views/footer.php';

?>
    
</body>
</html>