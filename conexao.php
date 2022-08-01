<?php
// CONEXÃO COM SERVIDOR
$conexao = @mysqli_connect('localhost','root','');

// CONEXÃO COM BANCO DE DADOS
$conecta_banco = mysqli_select_db($conexao,'proj');

?>