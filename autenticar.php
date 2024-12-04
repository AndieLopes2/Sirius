<?php

// Incluir arquivo de configuração
require_once "banco.php";

// Defina variáveis e inicialize com valores vazios
$username = $username = $confirm_user = "";
$password = $dtnasc = $confirm_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"]) ||  empty($_POST["password"])) {
        $username_err = "Por favor coloque um nome de usuário ou senha.";
    }  else {
        // Prepare uma declaração selecionada
        $sql = "SELECT id FROM tb_user WHERE email = :username and password = :password";

        if ($stmt = $pdo->prepare($sql)) {
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

            // Definir parâmetros
            $param_username = trim($_POST["email"]);
            $param_password = trim($_POST["password"]);

            // Tente executar a declaração preparada
            if ($stmt->execute()) {
                if ($stmt->rowCount() == 1) {
                    header("location: index.php");
                } else {                  
                    $username_err = "Este nome de usuário não encontrado.";
                }
            } else {
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }
            // Fechar declaração
            unset($stmt);
        }
    }
}
