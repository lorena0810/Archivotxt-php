<?php

$re=fopen("archivo.txt", "r") or die ("probelmas al leer archivo");

while(!feof($re)){
    $obtener = fgets($re);
    $slinea = nl2br($obtener);//para ver los salto de liena
    echo $slinea;


}
fclose($re); 

/* $data = file_get_contents("data/archivo.txt");
$products = json_decode($data, true);
 
foreach ($products as $product) {
    echo '<pre>';
    print_r($product);
    echo '</pre>';
} */

?>