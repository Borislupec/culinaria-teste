<?php
$servername="localhost";
$username="root";
$password="";
$db_name="banco";
$connect= mysqli_connect($servername,$username,$password,$db_name);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
  }

$nome=$_POST['nome'];
$senha=$_POST['senha'];
$verificar = "SELECT * FROM usuarios WHERE nome = '$nome'";
$resultado = mysqli_query($connect, $verificar);
$verificar2 = "SELECT * FROM usuarios WHERE nome and senha = '$nome' and '$senha'";

if (mysqli_num_rows($resultado) > 0){
    echo"<script>alert('Nome de usuario já existente :/');window.location.href='../registro/registro.html';</script>";
} else{
    $inserir = "INSERT INTO usuarios(nome,senha) VALUES ('$nome','$senha');";
    $sql = mysqli_query($connect,$inserir);
}
?>