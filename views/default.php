
<section class="main">
    <h1>ESTOS SON TODOS LOS USUARIOS DISPONIBLES</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Telefono</th>
        <th>Editar</th>
        <th>Elimnar</th>
    </tr>
    <?php foreach($resultados as $resultado){
    //while($user = $resultados): ?>
    <tr>
        <td><?= $resultado['id'] ?></td>
        <td><?= $resultado['nombre']?></td>
        <td><?= $resultado['apellido'] ?></td>
        <td><?= $resultado['edad'] ?></td>
        <td><?= $resultado['telefono'] ?></td>
        <td><a href="editar.php?id=<?=$resultado['id']?>">Editar</a></td>
        <td><a href="borrar.php?id=<?=$resultado['id']?>">Elimnar</a></td>
    </tr>
    <?php } ?>
</table>
</section>
