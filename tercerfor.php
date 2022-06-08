<?php
//nos conectamos al servidor de mysql
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="proyectomane";

//verificar conexion
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
//recuperas las variables 

$email=$_POST['email'];
$mensaje=$_POST['mensaje'];


//hacemos sentencia de sql
$sql="INSERT INTO tres VALUES('$email',
                                '$mensaje')";
//ejecutamos la sentencia de sql
$sql="INSERT INTO tres VALUES('$email',
'$mensaje')";
//ejecutamos la sentencia de sql
$ejecutar=mysqli_query($con,$sql);
//verificamos la ejecucion
if(!$ejecutar){
echo"Hubo Algun Error";
}else{
echo"Datos Guardados Correctamente<br>
<a href='final.html'>Volver</a>";
}
?>