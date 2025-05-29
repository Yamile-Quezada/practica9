<?php
require_once "conexion.php";
$db="alumnos";
$nombre= $_POST['nombre'];
$correo= $_POST['correo'];
$pass= $_POST['pass'];

echo "<br>". "Datos recibidos:". "<br><br>";
echo "$nombre, $correo, $pass<br>";
$sql= "INSERT INTO informacion(id,nombre,correo,pass)VALUES(null,'$nombre','$correo','$pass')";
if(mysqli_query($conexion,$sql)){
    echo"<br>Nuevo registro";
}else{
    echo "Error: ".$sql."<br>" .mysqli_error($conexion);
}
mysqli_close($conexion); //hola jajjkdsdsdsda
?> 