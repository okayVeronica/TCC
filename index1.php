<?php
require_once 'vendor/autoload.php';

$client = new Google_Client(['client_id' => 'YOUR_GOOGLE_CLIENT_ID.apps.googleusercontent.com']);
$id_token = $_POST['idtoken'];

$payload = $client->verifyIdToken($id_token);
if ($payload) {
    $userid = $payload['sub'];
    $email = $payload['email'];
    $name = $payload['name'];

    // Aqui você verifica se o usuário existe no banco de dados e cria uma sessão, ou cria uma nova conta
    // Conectar ao banco de dados e verificar o usuário
    $mysqli = new mysqli("localhost", "root", "", "tulip_love");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $stmt = $mysqli->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Usuário já existe
        $stmt->bind_result($id);
        $stmt->fetch();
        session_start();
        $_SESSION['user_id'] = $id;
    } else {
        // Novo usuário
        $stmt->close();
        $stmt = $mysqli->prepare("INSERT INTO users (name, email, google_id) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $userid);
        $stmt->execute();
        session_start();
        $_SESSION['user_id'] = $stmt->insert_id;
    }

    $stmt->close();
    $mysqli->close();

    echo json_encode(['status' => 'success', 'email' => $email, 'name' => $name]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid ID token']);
}
?>
