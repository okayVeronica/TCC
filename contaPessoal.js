function Verificar() {
    let tempoNamoro = document.getElementById('tempoNamoro').value;
    let problemas = document.getElementById('problemas').value;
    let objetivo = document.getElementById('objetivo').value;

    if (!tempoNamoro || !problemas || !objetivo) {
        alert("Por favor preencha todos os campos obrigatórios!");
    } else {
        window.location.href = 'homediario.html';
}
}