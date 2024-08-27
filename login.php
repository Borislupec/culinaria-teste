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


if (mysqli_num_rows($resultado) > 0){
    echo "Nome de usuario já existente :/";
} else{
    $inserir = "INSERT INTO usuarios(nome,senha) VALUES ('$nome','$senha');";
    $sql = mysqli_query($connect,$inserir);
}
?>