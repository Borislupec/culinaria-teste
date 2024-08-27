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
$verificar = "SELECT * FROM usuarios WHERE nome and senha = '$nome' and '$senha'";
$resultado = mysqli_query($connect, $verificar);


if (mysqli_num_rows($resultado) < 1){
    header('Location: ../entrada/entrada.html');
} else{
    echo "Nome e/ou senha incorretas!";
}
?>