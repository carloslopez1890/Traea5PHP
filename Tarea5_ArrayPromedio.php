<html>
 <head>




 <?php
 class Promedios
 {
 public $suma = 0;
 public $total = 0;
 
 function prom(){
 $Promedio = array (7.5,6.3,8.3,9.2,5.5,6.6,7.7,8.8);
for ($i=0; $i<count($Promedio); $i++){
$this->suma = $this->suma + $Promedio[$i];
echo "las notas son: ".$Promedio[$i]."<br />";
}
$this->total = $this->suma /4;
echo  "la suma de las notas es: ".$this->suma."<br />";
echo  "el promedio general es: ".$this->total."<br />";
  }
}

 $clase = new promedios;
  $clase->prom();
 ?>

 </body>                                                                 
 </html>