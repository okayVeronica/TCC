function Verificar(){
    let nameis = document.getElementById('nome').value;
    let gender = document.getElementById('genero').value;
    let borndate = document.getElementById('borndate').value;
    let cpf = document.getElementById('cpf').value;
    let telefone = document.getElementById('telefone').value;
    let endereco = document.getElementById('endereco')
    let email = document.getElementById('email').value;
    let subject = document.getElementById('subject').value;
    let confirmsenha = document.getElementById('confirmsenha').value;

    if (!nameis || !gender || !borndate || !cpf || !endereco || !telefone || !email || !subject || !confirmsenha){
        alert("Por favor preencha todos os campos obrigatórios!");
    } else{
        alert("Campos preechidos com sucesso!");
    }
    if (subject !== confirmsenha) {
        alert("As senhas tem de ser iguais!");
    }
}