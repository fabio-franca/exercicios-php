<?php
   # Recebendo os dados do formulário
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   # Testar os dados para esse login
   if($email != "fabio@email.com") {
        header("location: index.php?msg=email_not_found");
        echo "Email incorreto!";
   } elseif($senha != "1234") {
        header("location: index.php?msg=senha_not_found");
        echo "Senha incorreta!";
   } else {
        header("location: index.php?msg=login_success");
        echo "Login bem sucedido!!!";
   }
?>