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
<h1>CREAR USUARIO NUEVO</h1>

<?php
       
?>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="text" name="apellido" id="apellido" placeholder="Apellido">
        <input type="text" name="edad" id="edad" placeholder="Edad" >
        <input type="text" name="telefono" id="telefono" placeholder="Telefono">
        <input type="submit" value="Enviar" class="btn-enviar">

</form>

<?php
        if(isset($_POST['nombre']) && isset($_POST['apellido'])){
            $usuario = new Usuario();
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellido($_POST['apellido']);
            $usuario->setEdad($_POST['edad']);
            $usuario->setTelefono($_POST['telefono']);

            echo $usuario->getNombre();
            echo $usuario->getApellido();


            $usuario->crearUsuario();

            echo '<h3> Usuario nuevo Creado con exito </h3>';
        }
?>

</section>
<?php
include_once 'views/footer.php';

?>

</body>
</html>



