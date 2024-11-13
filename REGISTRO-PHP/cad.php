<?php 
include('conexao.php');

$tipo_usuario = $_POST["perfil"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$data = $_POST["idade"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$genero = $_POST["genero"];

$query = "INSERT INTO `usuario` (`tipo_usuario`, `nome_usuario`, `cpf_usuario`, `data_nascimento_usuario`, `email_usuario`, `senha_usuario`, `genero_usuario`) VALUES ('$tipo_usuario', '$nome', '$cpf', '$data', '$email', '$senha', '$genero')";


if(mysqli_query($mysqli, $query)){
    echo "login";
}else{
    echo "Erro: " . $query . "<br>" . mysqli_error($mysqli);
}

mysqli_close($mysqli);

?>