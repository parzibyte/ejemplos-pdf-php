<?php
$mascotas = ["Maggie", "Guayaba", "Meca", "Panqué"];
?>
<style>
/**
Tomado de https://parzibyte.me/blog/2018/10/16/tabla-html-bordes-css/
 */
table {
    border-collapse: collapse;
}
 
table,
th,
td {
    border: 1px solid black;
}
 
th,
td {
    padding: 5px;
}
</style>
<h1>Mis mascotas</h1>
<table>
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
