
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

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];
$comidafav=$_POST['comidafav'];
$contraseña=$_POST['contraseña'];
$genero=$_POST['genero'];
$bici=$_POST['bici'];
$carro=$_POST['carro'];
$nada=$_POST['nada'];

//hacemos sentencia de sql
$sql="INSERT INTO uno VALUES('$nombre',
                                '$correo',
                                '$mensaje',
                                '$comidafav',
                                '$contraseña',
                                '$genero',
                                '$bici',
                                '$carro',
                                '$nada')";
//ejecutamos la sentencia de sql
$sql="INSERT INTO uno VALUES('$nombre',
'$correo',
'$mensaje',
'$comidafav',
'$contraseña',
'$genero',
'$bici',
'$carro',
'$nada')";
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