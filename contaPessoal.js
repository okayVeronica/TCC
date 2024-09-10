
//Verifica se os dados do segundo formulário foram preenchidos corretamente
function Verificar(){
    let tempoNamoro = document.getElementById('tempoNamoro');
    let problemas = document.getElementById('problemas');
    let objetivo = document.getElementById('objetivo');

    if(!tempoNamoro || !problemas || !objetivo){
        alert("Por favor preencha todos os campos!");
    }else{
        window.location.href = "homediario.html"; 
    }

}