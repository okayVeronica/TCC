<?php 
include('conexao.php');

$cad_nome = $_POST['nome'];

$cad_usuario = "INSERT INTO `usuário`(`nome_usuario`) VALUES ('$cad_nome')";

if(mysqli_query($mysqli, $cad_marca)){
    echo "<h1>Cadastro efetuado com sucesso<h1><br>";
}else{
    echo "Erro: " . $cad_marca . "<br>" . mysqli_error($mysqli);
}

mysqli_close($mysqli)

?>