<?php
$servername="localhost";
$username="root";
$password="";
$db_name="banco";
$connect= mysqli_connect($servername,$username,$password,$db_name);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
  }

require 'login/login.php';

$_SESSION["nome"];

$id= "SELECT id from usuarios WHERE nome = '$_SESSION';";
$id_usuario=$id;
$comentario=$_POST['comentario'];
$sql = "INSERT INTO comentarios(id,comentario) VALUES ('$id_usuario','$comentario');";
if(mysqli_query($connect,$sql)){
    echo "seus dados foram inserido corretamente no banco";
} else{
    echo "algum erro ocorreu durante a execução";
}
?>