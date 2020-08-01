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
<form action="#" method="POST">
<?php
    	$usuarios = new Usuario();
     
        $resultados = $usuarios->getAllUsers();
        
            include_once 'views/default.php';

?>

</form>
<?php
include_once 'views/footer.php';

?>
    
</body>
</html>