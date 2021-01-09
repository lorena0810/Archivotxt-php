<?php
//para crear el archivo
$ar=fopen("archivo.txt","a") or die("Error al crear");

fwrite($ar, "Descripcion:".$_POST['descripcion']);
fclose($ar); //cerrar
echo " se creo correctamente el archivo de texto";



//para leer el archivo
/* $re=fopen("archivo.txt", "r") or die ("probelmas al leer archivo");

while(!feof($re)){
    $obtener = fgets($re);
    $slinea = nl2br($obtener);//para ver los salto de liena
    echo $slinea;


}
fclose($re); */


?>