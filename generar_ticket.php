<?php
$medidaTicket = 180;

?>
<!DOCTYPE html>
<html>
<head>

    <style>
        * {
            font-size: 12px;
            font-family: 'DejaVu Sans', serif;
        }

        h1 {
            font-size: 18px;
        }

        .ticket {
            margin: 2px;
        }

        td,
        th,
        tr,
        table {
            border-top: 1px solid black;
            border-collapse: collapse;
            margin: 0 auto;
        }

        td.precio {
            text-align: right;
            font-size: 11px;
        }

        td.cantidad {
            font-size: 11px;
        }

        td.producto {
            text-align: center;
        }

        th {
            text-align: center;
        }


        .centrado {
            text-align: center;
            align-content: center;
        }

        .ticket {
            width: <?php echo $medidaTicket?>px;
            max-width: <?php echo $medidaTicket?>px;
        }

        img {
            max-width: inherit;
            width: inherit;
        }

        * {
            margin: 0;
            padding: 0;
        }

        .ticket {
            margin: 0;
            padding: 0;
        }

        body {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="ticket centrado">
    <h1>NOMBRE DEL NEGOCIO</h1>
    <h2>Ticket de venta #12</h2>
    <h2>2020-02-05 00:12:22</h2>

    <table>
        <thead>
        <tr class="centrado">
            <th class="cantidad">CANT</th>
            <th class="producto">PRODUCTO</th>
            <th class="precio">$$</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="cantidad">1.00</td>
            <td class="producto">CHEETOS VERDES 80 G</td>
            <td class="precio">$8.50</td>
        </tr>
        <tr>
            <td class="cantidad">2.00</td>
            <td class="producto">KINDER DELICE</td>
            <td class="precio">$10.00</td>
        </tr>
        <tr>
            <td class="cantidad">1.00</td>
            <td class="producto">COCA COLA 600 ML</td>
            <td class="precio">$15,695.22</td>
        </tr>
        </tbody>
        <tr>
            <td class="cantidad"></td>
            <td class="producto">
                <strong>TOTAL</strong>
            </td>
            <td class="precio">
                $123.45
            </td>
        </tr>
    </table>
    <p class="centrado">¡GRACIAS POR SU COMPRA!
        <br>parzibyte.me</p>
</div>
</body>
</html>

