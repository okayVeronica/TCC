<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o valor do campo 'perfil'
        $perfil = $_POST['perfil'];
        
        // Redireciona com base no tipo de perfil
        if ($perfil == "pessoal") {
            echo "pessoal";
        } elseif ($perfil == "profissional") {
            echo "profissional";
        }
    }
    ?>