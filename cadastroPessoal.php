<?php

// Inserir os dados na tabela de usuários
$sql = "INSERT INTO usuario (tipo_usuario, nome_usuario, cpf_usuario, data_nascimento_usuario, genero_usuario, email_usuario, senha_usuario, foto_perfil_usuario, bio_usuario) VALUES ('$nome','$genero','$idade','$cpf','$email','$senha')";

if ($conn->query($sql) === TRUE) {
echo "Usuário cadastrado com sucesso!";
} else {
echo "Erro ao cadastrar o usuário: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
 ?>