<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

// Inclua a conexão com o banco de dados aqui
include "./conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $email = mysqli_real_escape_string($conn, $email);
    $senha = mysqli_real_escape_string($conn, $senha);

    //$senhaHash = password_hash($senha, PASSWORD_BCRYPT);

    $sql = "SELECT * FROM usuario WHERE Email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($senha==$row["Senha"]) {
            // Usuário autenticado com sucesso
            echo json_encode(["status" => "success", "message" => "Login bem-sucedido!"]);
        } else {
            // Senha incorreta
            echo json_encode(["status" => "error", "message" => "Senha incorreta."]);
        }
    } else {
        // Usuário não encontrado
        echo json_encode(["status" => "error", "message" => "Usuário não encontrado."]);
    }
}

$conn->close();
?>
