function Verificar() {
    let nome = document.getElementById('nome').value;
    let genero = document.getElementById('genero').value;
    let idade = document.getElementById('idade').value;
    let cpf = document.getElementById('cpf').value;
    let email = document.getElementById('email').value;
    let perfil = document.getElementById('perfil').value;
    let senha = document.getElementById('senha').value;
    let confirmarSenha = document.getElementById('confirmarSenha').value;

    /*
    if (!nome || !genero || !idade || !cpf || !email || !senha || !confirmarSenha) {
        alert("Por favor preencha todos os campos obrigatórios!");
    } else {
        alert("Campos preechidos com sucesso!");
    }
    if (senha !== confirmarSenha) {
        alert("As senhas tem de ser iguais!");
    }// Verifica se a idade é maior que 18 anos
    if (isNaN(idade) || idade < 18) {
        alert("Você deve ter pelo menos 18 anos para se cadastrar.");
        return false;
    }

    // Verifica se o CPF é válido
    if (!validarCPF(cpf)) {
        alert("CPF inválido. Por favor, insira um CPF válido.");
        return false;
    }

    // Verifica se o e-mail é válido
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("E-mail inválido. Por favor, insira um e-mail válido.");
        return false;
    }

    // Verifica se as senhas são iguais
    if (senha !== confirmarSenha) {
        alert("As senhas devem ser iguais!");
        return false;
    }

    alert("Campos preenchidos com sucesso!");
}

*/

    // Verifica se o e-mail é válido
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // CÓPIA PARA TESTES
    // Validações dos campos do formulário de cadastro
    if (!nome || !genero || !idade || !cpf || !email || !perfil || !senha || !confirmarSenha) {
        alert("Por favor preencha todos os campos obrigatórios!");
    } else if (senha !== confirmarSenha) {
        alert("As senhas tem de ser iguais!");
    } else {
        const dataNascimento = new Date(idade); // Converte o valor de idade (string) em um objeto Date
        const hoje = new Date(); // Pega a data atual
        let idadeCalculada = hoje.getFullYear() - dataNascimento.getFullYear(); // Subtrai os anos

        // Verifica se o aniversário já passou no ano atual
        const mes = hoje.getMonth() - dataNascimento.getMonth();
        if (mes < 0 || (mes === 0 && hoje.getDate() < dataNascimento.getDate())) {
            idadeCalculada--; // Reduz 1 ano se o aniversário não tiver passado ainda
        }
        if (idadeCalculada < 18) { // Verifica se a idade é maior que 18 anos
            alert("Você deve ter pelo menos 18 anos para se cadastrar.");
            console.log(idade)
        } else if (!validarCPF(cpf)) { // Verifica se o CPF é válido
            alert("CPF inválido. Por favor, insira um CPF válido.");
        } else if (!emailRegex.test(email)) {
            alert("E-mail inválido. Por favor, insira um e-mail válido.");
        } else {
            var xhr = new XMLHttpRequest();
            var response = "";

            xhr.open("POST", "../REGISTRO-PHP/kkk.php");
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("perfil=" + perfil);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    console.log("nice porra kkkkkkkk");           
                    response = xhr.responseText;
                    
                    if (response == "pessoal") window.location.href = "pessoal.php";
                    if (response == "profissional") window.location.href = "profissional.php";
                }
            }
        }
    }
}



// Função para validar CPF (utiliza uma lógica comum de validação de CPF)
function validarCPF(cpf) {
    cpf = cpf.replace(/[^\d]+/g, ''); // Remove caracteres não numéricos
    if (cpf.length !== 11 || /^(\d)\1{10}$/.test(cpf)) {
        return false; // CPF inválido se não tiver 11 dígitos ou se todos os dígitos forem iguais
    }
    let soma = 0;
    for (let i = 0; i < 9; i++) {
        soma += parseInt(cpf.charAt(i)) * (10 - i);
    }
    let resto = 11 - (soma % 11);
    if (resto === 10 || resto === 11) {
        resto = 0;
    }
    if (resto !== parseInt(cpf.charAt(9))) {
        return false;
    }
    soma = 0;
    for (let i = 0; i < 10; i++) {
        soma += parseInt(cpf.charAt(i)) * (11 - i);
    }
    resto = 11 - (soma % 11);
    if (resto === 10 || resto === 11) {
        resto = 0;
    }
    if (resto !== parseInt(cpf.charAt(10))) {
        return false;
    }
    return true;
}
