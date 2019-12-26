<?php
$mascotas = ["Maggie", "Guayaba", "Meca", "Panqué"];
?>
<head>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<h1>Mis mascotas</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($mascotas as $mascota) {?>
        <tr>
            <td><?php echo $mascota; ?></td>
        </tr>
    <?php }?>
    </tbody>
</table>
