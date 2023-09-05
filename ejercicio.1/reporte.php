<?php
require 'conexion.php'; //nombre del archivo de conexion
require 'plantilla.php'; //nombre de la carpeta donde esta el archivo


$pdf = new FPDF(); //crear un nuevo archivo
$pdf-> addpage(); //crear una pagina 
$pdf-> setfont("times", "b", 12); //Tipo de letra del reporte
$pdf-> image("imagen/sena.jpg",12,10,53,);
$pdf-> cell(125,5,"REPORTE EN PDF CON SQL", 11,11 ,"R");

$pdf->Ln(13);//salto de linea

//Consultar la base de datos para verificar las credenciales
$sql= "SELECT Alumno, Apellido, Edad, Telefono FROM estudiantes";
$resultado= $conn->query($sql);
$pdf->Ln(9); //Salto de linea

$pdf-> cell(50,8, "Alumno",1,0,"C"); //Estructura de la tabla
$pdf-> cell(50,8, "Apellido",1,0,"C");
$pdf-> cell(50,8, "Edad",1,0,"C");
$pdf-> cell(47,8, "Telefono",1,1,"C");

//Encabezado de la linea
while ($fila=$resultado->fetch_assoc()) {
  
    $pdf-> cell(50,8,$fila[ "Alumno"],1,0,"L");
    $pdf-> cell(50,8,$fila[ "Apellido"],1,0,"C");
    $pdf-> cell(50,8,$fila[ "Edad"],1,0,"C");
    $pdf-> cell(47,8,$fila[ "Telefono"],1,1,"C");
}



$pdf->output();


?>