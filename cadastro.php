<?php


// Incluir arquivo de configuração
require_once "banco.php";


 
// Defina variáveis e inicialize com valores vazios
$username = $username = $confirm_password = "";
$dtnasc = $dtnasc = $confirm_dtnasc = "";
$sobrenome = $sobrenome = $confirm_sobrenome = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validar nome de usuário
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor coloque um nome de usuário.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "O nome de usuário pode conter apenas letras, números e sublinhados.";
    } else{
        // Prepare uma declaração selecionada
        $sql = "SELECT id FROM tb_user WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_username = trim($_POST["username"]);
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "Este nome de usuário já está em uso.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }
            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Validar senha
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor insira uma senha.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "A senha deve ter pelo menos 6 caracteres.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validar sobrenome/////////////////////////////////////////////////
    if(empty(trim($_POST["sobrenome"]))){
        $password_err = "Por favor insira seu sobrenome.";     
    }
    elseif(strlen(trim($_POST["sobrenome"])) < 1)
    {
        $password_err = "sobrenome";
    } else{
        $sobrenome = trim($_POST["sobrenome"]);
    }

    // Validar datansc/////////////////////////////////////////////////
    if(empty(trim($_POST["dtnasc"]))){
        $dtnasc_err = "Por favor insira sua data de nascimento.";     
    }
    elseif(strlen(trim($_POST["dtnasc"])) < 1)
    {
        $dtnasc_err = "dtnasc";
    } else{
        $dtnasc = trim($_POST["dtnasc"]);
    }
    ///////////////////////////////////////////////////////////////
    
    // Validar e confirmar a senha
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor, confirme a senha.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "A senha não confere.";
        }
    }
    if(empty(trim($_POST["email"]))){
        $confirm_emil_err = "Por favor, confirme o email.";     
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Verifique os erros de entrada antes de inserir no banco de dados
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare uma declaração de inserção
        $sql = "INSERT INTO tb_user (username, password,sobrenome,email,dtnasc) VALUES (:username, :password, :sobrenome,:email,:dtnasc)";
         
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            ///////////////////////////////////////////////////////////////////////////
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":sobrenome", $param_sobrenome, PDO::PARAM_STR);
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":dtnasc", $param_dtnasc, PDO::PARAM_STR);
            
            // Definir parâmetros
            ///////////////////////////////////////////////////////////////////
            $param_username = $username;
            $param_password = $password; // Creates a password hash
            $param_sobrenome =$sobrenome;
            $param_email =$email;
            $param_dtnasc = $dtnasc;
         
           
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Redirecionar para a página de login
                ?><script>
                alert("Dados gravados com sucess!");
                </script> <?php
                header("location: login.php");
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }
            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Fechar conexão
    unset($pdo);
}
?>