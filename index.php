<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Criar Uma Conta</h2>
           <h3> <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset ($_SESSION['msg']);
                }
            ?></h3>
        </div>

        <form id="form" class="form" method="post" action="salva_bd.php">
            <div class="form_control error">
                <label for="username">Usuario</label>
                <input type="text" name="username" id="username" placeholder="Digite seu nome"
                    <?php
                        if (!empty($_SESSION['value_nome'])) {
                            echo "value='".$_SESSION['value_nome']."'";
                            unset ($_SESSION['value_nome']);
                        }
                    ?>
                >
                <small> 
                    <?php
                        if (!empty($_SESSION['vazio_nome'])) {
                            echo $_SESSION['vazio_nome'];
                            unset ($_SESSION['vazio_nome']);
                        }
                    ?>
                </small>
            </div>

            <div class="form_control error">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Digite seu email"
                    <?php
                         if (!empty($_SESSION['value_email'])) {
                            echo "value='".$_SESSION['value_email']."'";
                            unset ($_SESSION['value_email']);
                        }
                    ?>
                >
                <small>
                    <?php
                        if (!empty($_SESSION['vazio_email'])) {
                            echo $_SESSION['vazio_email'];
                            unset ($_SESSION['vazio_email']);
                        }
                     ?>
                </small>
            </div>

            <div class="form_control error">
                <label for="password">Senha</label>
                <input type="text" name="password" id="password" placeholder="Digite sua senha"
                    <?php
                         if (!empty($_SESSION['value_senha'])) {
                            echo "value='".$_SESSION['value_senha']."'";
                            unset ($_SESSION['value_senha']);
                        }
                    ?>
                >
                <small>
                    <?php
                        if (!empty($_SESSION['vazio_senha'])) {
                            echo $_SESSION['vazio_senha'];
                            unset ($_SESSION['vazio_senha']);
                        }
                    ?>
                </small>
            </div>

            <div class="form_control error">
                <label for="password_confirmation">Confirmação de Senha</label>
                <input type="text" name="password_confirmation" id="password_confirmation" placeholder="Digite sua senha novamente" 
                    <?php
                         if (!empty($_SESSION['value_confirmacao'])) {
                            echo "value='".$_SESSION['value_confirmacao']."'";
                            unset ($_SESSION['value_confirmacao']);
                        }
                    ?>
                >
                <small>
                    <?php
                        if (!empty($_SESSION['vazio_confirmacao'])) {
                            echo $_SESSION['vazio_confirmacao'];
                            unset ($_SESSION['vazio_confirmacao']);
                        }
                    ?>
                </small>
            </div>
            <button type="submit" id="submit" name="enviar" >Enviar</button>


        </form>

    </div>
   
</body>
</html>