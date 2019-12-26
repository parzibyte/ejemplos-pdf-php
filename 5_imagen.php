<?php
include_once "./vendor/autoload.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
ob_start();
include "./tabla.php";
$html = ob_get_clean();
$dompdf->loadHtml("<h1>Una imagen</h1><br>
<img src='./parzibyte.jpg'/>");
$dompdf->render();
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=documento.pdf");
echo $dompdf->output();
