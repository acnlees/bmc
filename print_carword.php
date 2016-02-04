<?php

include("mpdf60/". "mpdf.php");


$carword = strtoupper($_GET['carword']);
$b64_image = base64_encode(file_get_contents("logo.jpg"));


$html = "<div style = 'text-align:center;' > <img style = 'text-align:center;' src ='logo.jpg' width='110mm'  /> 
<h1 style ='font-size:130vw;  text-align:center';> ".$carword."</h1></div> ";



$mpdf=new mPDF('utf-8', 'A4-L');
$mpdf->showImageErrors = true;
$mpdf->WriteHTML($html);
$mpdf->debug = true;
$mpdf->Output();


exit;


?>