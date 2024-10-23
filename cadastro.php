<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> TULIP LOVE | Faça seu cadastro </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" type='text/css' media='screen'>
    
</head>
<body>
    <h1> Tulip Love</h1>
    <p>Faça seu cadastro</p>
    <form method="post">
            <label class="form-label">Nome:</label><br>
            <input type="text" class="form-control" id="nome" placeholder="digite seu nome completo"><br>
            <label for="gender" class="form-label">Gênero:</label><br>
            <input type="text" class="form-control" id="genero" placeholder="fem-masc"><br>
            <label for="dataNascimento">Data de Nascimento:</label><br>
            <input type="date" id="idade" name="idade" required><br>
            <label for="cpf" class="form-label">CPF:</label><br>
            <input type="text" class="form-control" id="cpf" placeholder="___.___.___.-__"><br>
            <label for="email" class="form-label">E-mail:</label><br>
            <input type="email" class="form-control" id="email" placeholder="fulaninhodetal@hotmail"><br>
            <label for="">Como você pretende utilizar nossa plataforma?</label>
            <select name="perfil" class="form-control" id="perfil" required>
              <option value="pessoal" name="pessoal">Para uso pessoal</option>
              <option value="profissional" name="profissional">Para uso profissional</option>
            </select><br>
            <label for="password" class="form-label">Senha:</label><br>
            <input type="password" class="form-control" id="senha"><br>
            <label for="password" class="form-label">Confirmar senha:</label><br>
            <input type="password" class="form-control" id="confirmarSenha"><br>
        <br>
        <br>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" onclick="Verificar();">Cadastrar</button>
        </div>
      </form>
      <script src='cadastro.js'></script>
   </body>
</html>