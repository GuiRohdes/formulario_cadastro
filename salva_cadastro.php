<?php
    include_once('conexão.php');
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $mensagem = $_POST['mensagem'];

    $result_msg_contato = "INSERT INTO pessoas(nome, sobrenome, email, senha, mensagem, created) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$mensagem', NOW())";

    $resultado_msg_contato = mysqli_query($conn, $result_msg_contato);

    print("CADASTRO REALIZADO COM SUCESSO!!")
?>