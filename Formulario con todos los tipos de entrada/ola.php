<?php

//nos conectamos al servidor de mysql
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="prueba";
//verificar conexion
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
//recuperas las variables 
$comidafav=$_POST['comidafav'];
$usuario=$_POST['usuario'];
$psw=$_POST['psw'];
$genero=$_POST['genero'];
$vehiculo=$_POST['vehiculo'];
$email=$_POST['email'];
//hacemos sentencia de sql
$sql="INSERT INTO tablap VALUES('$comidafav',
                                '$usuario',
                                '$psw',
                                '$genero',
                                '$vehiculo',
                                '$email')";
//ejecutamos la sentencia de sql
$sql="INSERT INTO tablap VALUES('$comidafav',
'$usuario',
'$psw',
'$genero',
'$vehiculo',
'$email')";
//ejecutamos la sentencia de sql
$ejecutar=mysqli_query($con,$sql);
//verificamos la ejecucion
if(!$ejecutar){
echo"Hubo Algun Error";
}else{
echo"Datos Guardados Correctamente<br>
<a href='pr.html'>Volver</a>";
}
?>
