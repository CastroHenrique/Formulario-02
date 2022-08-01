<?php

session_start();
include_once('connection.php');

$nome = $_POST['username'];
    if (empty($_POST['username'])) {
        $_SESSION['vazio_nome'] = "Campo nome é obrigatório";
    
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://127.0.0.1/Projetos/Formulario%2002/'>
        ";
    }
    else{
        $_SESSION['value_nome'] = $_POST['username'];
        $nome_ok = true;
    }


$email = $_POST['email'];
    if (empty($_POST['email']) ) {
        $_SESSION['vazio_email'] = "Campo e-mail é obrigatório";
    
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://127.0.0.1/Projetos/Formulario%2002/'>
        ";
    } elseif (!filter_var( $email, FILTER_VALIDATE_EMAIL )){
        $_SESSION['vazio_email'] = "Digite um e-mail valido";
    
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://127.0.0.1/Projetos/Formulario%2002/'>
        ";
    }
        
    else{
        $_SESSION['value_email'] =  $_POST['email'];
        $email_ok =  true;
    }


$senha = $_POST['password'];
    if (empty($_POST['password'])) {
        $_SESSION['vazio_senha'] = "Campo Senha é obrigatório";
    
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://127.0.0.1/Projetos/Formulario%2002/'>
        ";
    }else{
        $_SESSION['value_senha'] = $_POST['password'];

    }


$pass_conf = $_POST['password_confirmation'];
    if (empty($_POST['password_confirmation']) ) {
        $_SESSION['vazio_confirmacao'] = "Campo Senha é obrigatório";
    
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://127.0.0.1/Projetos/Formulario%2002/'>
        ";
    }elseif ($senha !== $pass_conf) {
        $_SESSION['vazio_confirmacao'] = "Senhas diferentes";
    
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://127.0.0.1/Projetos/Formulario%2002/'>
        ";
    }else{
        $_SESSION['value_confirmacao'] = $_POST['password_confirmation'];
        $senha_ok = true;
    }
   

      $result_usuario =  "INSERT INTO usuario ( nome, email, senha) VALUES ('$nome', '$email','$pass_conf')";
      $resultado_usuario = mysqli_query($conn, $result_usuario);

      if (mysqli_insert_id($conn)) {
        $_SESSION['msg'] = "<p style='color: green;'>Usuario Cadastrado com Sucesso</p>"; 
        header("location: index.php");
    }else{
        $_SESSION['msg'] = "<p style='color: red;'>Usuario não cadastrado</p>"; 
        header("location: index.php");
    }
      

    


?>
