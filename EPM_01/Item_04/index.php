<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="./style.css" rel="stylesheet" >
<body>
<!------ Include the above in your HEAD tag ---------->

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<form action="login.php" method="POST">
				<div class="sign-in-htm">
					<div class="group">
						<label for="user" class="label">Email</label>
						<input id="user" type="text" class="input" name="email">
					</div>
					<div class="group">
						<label for="pass" class="label">Senha</label>
						<input id="pass" type="password" class="input" data-type="password" name="senha">
					</div>
					<div class="group">
						<input type="submit" class="button" value="Fazer Login">
					</div>
					<div class="hr"></div>
				</div>
			</form>
			<div class="for-pwd-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Reset Password">
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<?php
    if(isset($_GET['msg'])) {
        if($_GET['msg'] == "email_not_found") {
            $titulo = "E-mail não encontrado";
            $subtitulo = "E-mail não existe na base de dados";
            $tipo = "error";
        } elseif($_GET['msg'] == "senha_not_found") {
            $titulo = "Senha incorreta";
            $subtitulo = "Tente novamente";
            $tipo = "error";
        } elseif($_GET['msg'] == "login_success"){
            $titulo = "Login encontrado";
            $subtitulo = "Login bem sucedido";
            $tipo = "success";      
        }
?>

    <script type="text/javascript">
        $(document).ready(function(){
            Swal.fire(
                "<?=$titulo;?>",
                "<?=$subtitulo;?>",
                "<?=$tipo;?>"
                )
        });
    </script>
<?php } ?>