<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> TULIP LOVE | Faça seu cadastro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" type='text/css' media='screen'>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1> Tulip Love</h1>
    <p>Faça seu cadastro - Conta profissional</p>
    <form>
        <div class="container" id="formDois">
            <label class="form-label">Número CRP</label><br>
            <input type="text" class="form-control" id="nomeCRP" placeholder="__ (__ ____-____)"><br>
            <label for="gender" class="form-label">Estado de registro do CRP:</label><br>
            <select>
                <option>Acre</option>
                <option>Alagoas</option>
                <option>Amapá</option>
                <option>Amazonas</option>
                <option>Bahia</option>
                <option>Ceará</option>
                <option>Distrito Federal</option>
                <option>Espirito Santo</option>
                <option>Goiás</option>
                <option>Maranhão</option>
                <option>Mato Grosso</option>
                <option>Mato Grosso do Sul</option>
                <option>Minas Gerais</option>
                <option>Pará</option>
                <option>Paraíba</option>
                <option>Paraná</option>
                <option>Pernambuco</option>
                <option>Piauí</option>
                <option>Rio de Janeiro</option>
                <option>Rio Grande do Norte</option>
                <option>Rio Grande do Sul</option>
                <option>Rondônia</option>
                <option>Roraima</option>
                <option>Santa Catarina</option>
                <option>São Paulo</option>
                <option>Sergipe</option>
                <option>Tocantins</option>
            </select><br>
            <label for="date" class="form-label">Especialização:</label><br>
            <input type="text" class="form-control" id="experiencia" placeholder=""><br>
            <label for="cpf" class="form-label">Tempo de experiência:</label><br>
            <select>
                <option>menos de 1 ano</option>
                <option>1-2 anos</option>
                <option>2-4 anos</option>
                <option>mais de 5 anos</option>
            </select><br>
            <label for="email" class="form-label">Formação acadêmica:</label><br>
            <input type="email" class="form-control" id="formacao" placeholder=""><br>
            <label for="email" class="form-label">Instituição de ensino:</label><br>
            <input type="email" class="form-control" id="ensino" placeholder=""><br>
            <label for="email" class="form-label">Abordagem teórica:</label><br>
            <input type="email" class="form-control" id="abordagem" placeholder=""><br>
            <label for="password" class="form-label">Senha:</label><br>
            <input type="password" class="form-control" id="senha"><br>
            <label for="password" class="form-label">Confirmar senha:</label><br>
            <input type="password" class="form-control" id="confirmarSenha"><br>
        </div>
        <br>
        <br>
        <div class="col-12">
          <button type="button" class="btn btn-primary" onclick="Verificar()">Cadastrar</button>
        </div>
      </form>
      <script src='cadastroPsicologo.js'></script>
   </body>
</html>