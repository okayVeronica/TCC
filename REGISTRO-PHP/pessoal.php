<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>teste 2
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <form>
    <h2>Para finalizar seu cadastro, precisamos conhecer um pouquinho mais de você...</h2>
    <h3>A quanto tempo está com seu parceiro?</h3>
        <select name="tempoNamoro" id="tempoNamoro">
            <option value="1">menos de 1 ano</option>
            <option value="2">1-5 anos</option>
            <option value="3">6-10 anos</option>
            <option value="4">mais de 10 anos</option>
        </select>
    <h3>Quais problemas vem enfretado no seu relacionamento?</h3>
    <input type="text" class="form-control" id="problemas">
    <h3>Qual seu objetivo com nosso site?</h3>
    <input type="text" class="form-control" id="objetivo">
    <button type="button" class="btn btn-primary" onclick="Verificar()">Concluir</button>
    </form>
</body>
</html>
<script src='contaPessoal.js'></script>