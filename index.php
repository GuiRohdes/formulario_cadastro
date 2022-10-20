<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
      <form method="POST" action = "salva_cadastro.php">
        <label>Nome</label>
        <input type="text" name="nome" required placeholder="DIGITE SEU NOME">
        <label>Sobrenome</label>
        <input type="text" name="sobrenome" required placeholder="DIGITE SEU SOBRENOME"> 
        <label>E-mail</label>
        <input type="email" name="email" placeholder="DIGITE SEU E-MAIL">
        <label>Senha</label>
        <input type="password" name="senha" placeholder="DIGITE SUA SENHA"> 
        <label>Mensagem</label>
        <textarea name="mensagem" placeholder="DIGITE SUA MENSAGEM..." ></textarea> 

        <input type="submit" value="ENVIAR">

      </form>
      
    </main>
</body>
</html>