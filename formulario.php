<?php
    if(isset($_POST['submit']))
    {
        include_once('confg.php');
        $tutorname = $_POST['tutorname'];
        $petname = $_POST['petname'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $confirmpassword =$_POST['confirmPassword'];
        $specie = $_POST['specie'];
        $result = mysqli_query($conexao, "INSERT INTO usuarios(tutorname, petname, email, telefone, senha, confirmPassword, specie) 
        VALUES ( '$tutorname', '$petname', '$email', '$telefone', '$senha', '$confirmpassword', '$specie')");
    }    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Rede Social</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="capa.png" alt="">
        </div>
        <diforv class="form">
            <form action="formulario.php" method = "POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre seu Pet</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="tutorname">Nome tutor</label>
                        <input id="tutorname" type="text" name="tutorname" placeholder="Digite seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="petname">Nome do Pet</label>
                        <input id="petname" type="text" name="petname" placeholder="Digite nome do Pet" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="telefone">Celular</label>
                        <input id="telefone" type="tel" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>

                </div>

                <div class="specie-inputs">
                    <div class="specie-title">
                        <h6>Espécie</h6>
                    </div>

                    <div class="specie-group">
                        <div class="specie-input">
                            <input id="gato" type="radio" name="specie">
                            <label for="gato">Gato</label>
                        </div>

                        <div class="specie-input">
                            <input id="cachorro" type="radio" name="specie">
                            <label for="cachorro">Cachorro</label>
                        </div>

                        <div class="specie-input">
                            <input id="passaro" type="radio" name="specie">
                            <label for="passaro">Pássaro</label>
                        </div>

                        <div class="specie-input">
                            <input id="outro" type="radio" name="specie">
                            <label for="outro">Outro</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button name="submit"><a href="#">Continue</a> </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
