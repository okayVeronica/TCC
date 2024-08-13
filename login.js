document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o envio do formulário para validação

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        // Validação básica
        if (email === '' || password === '') {
            alert('Por favor, preencha todos os campos.');
            return;
        }

        // Regex básico para validação de email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('Por favor, insira um email válido.');
            return;
        }

        // Se a validação passar, envie o formulário
        loginForm.submit();
    });

    // Adicionar efeito de foco nos inputs
    const inputs = document.querySelectorAll('.input-group input');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentNode.classList.add('focused');
        });

        input.addEventListener('blur', function() {
            this.parentNode.classList.remove('focused');
        });
    });
});

// Função de callback após sucesso no login com Google
function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log('ID: ' + profile.getId()); // Não envie esta informação para o seu backend! Use um ID token em vez disso.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail()); // Isto é um e-mail verificado

    // Enviar o token de ID para o backend
    var id_token = googleUser.getAuthResponse().id_token;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'login_with_google.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        console.log('Resposta do servidor: ' + xhr.responseText);
        // Aqui você pode redirecionar o usuário para outra página ou exibir uma mensagem de sucesso
    };
    xhr.send('idtoken=' + id_token);
}
