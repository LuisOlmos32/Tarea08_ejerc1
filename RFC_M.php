<?php

   //crear la clase que permita crear un rfc 
   class PersonaRFC{
    
       private $nombre;
       private $apeP;
       private $apeM;
       private $fechaNac;
   
       public  function __construct(){
       
     }
    
     //dos formas para ingresar datos
   
     //SET AND GET
     public  function setNombre($nom){
       $this->nombre=$nom; 
     }
     public  function getNombre(){
       return $this->nombre; 
     }
     
     //COMPORTAMIENTO
     //METODO PARA INGRESAR LOS DATOS
     public function setDatos($nom, $ap1, $ap2, $nac){
       $this->nombre=$nom;
       $this->apeP=$ap1;
       $this->apeM=$ap2;
       $this->fechaNac=$nac;
     }
     
     //GENERAR DATOS 
   
     public function generarRFC(){
       
       $a=substr($this->apeP,0,2);
       $b=substr($this->apeM,0,1);
       $c=substr($this->nombre,0,1);
                                                  //FORMATO
       //para la fecha de nacimiento por partes = AAAA-MM-DD
       //año
       $d=substr($this->fechaNac,2,2);
       //mes
       $e=substr($this->fechaNac,5,2);
       //dia
       $f=substr($this->fechaNac,8,2);
       
       return strtoupper($a.$b.$c.$d.$e.$f);
       
     }
   }
 
   ?>