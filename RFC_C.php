<?php
require_once('rfc_M.php');
 //recupero datos de la vista (html y el POST es el metodo de la vista 
if( isset($_POST['txtNombre'])){
    //RECUPERO DATOS DE LA VISTA
$nom=$_POST['txtNombre'];
$apPat=$_POST['txtApeP'];
$apMat=$_POST['txtApeM'];
$fecha=$_POST['txtFecha'];    
   //MOSTRAR DATOS
 //INSTANCIAR CLASES
$objMio= new PersonaRFC();
$objMio->setDatos($nom,$apPat,$apMat,$fecha);
$datos=$objMio->generarRFC();

}
require_once('RFC_V.html'); 
?>
