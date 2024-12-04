<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css stylesheet -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form id="registrationForm" action="cadastro.php" method="post">
                <h1>Criar uma conta</h1>
                <div class="social-container">
                </div>
                <span>ou use seu e-mail para cadastro</span>

                <div class="error" id="errorMessage"></div>
                <div class="infield">
                    <div class="error" id="errorMessage"></div>
                    <input type="text" id="nome" name="username" placeholder="Nome" required>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="email" id="email" placeholder="Email" name="email" required />
                    <label></label>
                </div>
                <div class="infield">
                    <div class="input-group">
                        <input type="password" id="senha" name="password" placeholder="Senha" required maxlength="50">
                        <span class="toggle-password" onclick="togglePassword('senha')">👁️</span>
                        <label></label>
                    </div>
                </div>
                <div class="infield">
                    <div class="input-group">
                        <input type="password" id="confirm_senha" name="confirm_password" placeholder="Confirmar senha" required maxlength="50">
                        <span class="toggle-password" onclick="togglePassword('confirm_senha')">👁️</span>
                        <label></label>
                    </div>
                </div>
                <div class="infield">
                    <input type="date" id="data_nascimento" name="dtnasc" required>
                    <label></label>
                </div>
                <!-- <button type="button" name="grava">Inscrever-se</button> -->
                <input type="submit" value="Grava">
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="autenticar.php" method="Post">
                <h1>Entrar</h1>
                <div class="social-container"></div>
                <span>ou use sua conta</span>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Senha"  name="password"/>
                    <label></label>
                </div>
                <input type="submit" value="Entrar"  class="btn btn-primary">
                <a href="index.html" class="forgot">Esqueceu sua senha?</a>

            </form>
        </div>


        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bem vindo!</h1>
                    <p>Faça login com suas informações pessoais e junte-se a nós</p>

                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Olá amigo!</h1>
                    <p>Insira seus dados pessoais e comece sua jornada conosco</p>
                    <button>Inscrever-se</button>

                </div>
            </div>
            <button id="overlayBtn" type="button"></button>
        </div>
    </div>


</body>
<script src="js/login.js"></script>

</html>