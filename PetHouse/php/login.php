<?php
include('conexionDB.php');
  // Validar la conexión de base de datos.
  if ($conexion ->connect_error) {
    die("Error de Conexion: " . $conexion ->connect_error);
  }
   

$user = $_POST['user'];
$password = $_POST['password'];

$sql = sprintf("SELECT * FROM usuarios WHERE cedula_U='%s' AND password = %s", mysql_real_escape_string($user), mysql_real_escape_string($password));
$resultado = $conexion->query($sql);
 
if($resultado){
     
    // Redirecciono al usuario a la página principal del sitio.
    header("Location: test.php"); 
  }else{
    echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
  }





