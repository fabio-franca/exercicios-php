<!DOCTYPE html>
<html>
<head>
	<title> Formulário de Cadastro </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	
	<?php include_once 'components/menu.php'; ?>

	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-8 offset-2">
	  		<form action="inserir.php" method="POST">
				<div class="card">
				  <div class="card-header">
				    <h4 class="text-secondary">Cadastro de Cliente</h4>
				  </div>
				  <div class="card-body">
				    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-7">
                                    <label> Nome Cliente: <span class="text-danger">*</span></label><br>
                                    <input type="text" name="client_name" class="form-control" required placeholder="Digite o nome" maxlength="50"><br>
                                </div>
                                <div class="col-md-5">
                                    <label> CPF: <span class="text-danger">*</span></label><br>
                                    <input type="text" name="client_cpf" class="form-control" required placeholder="Digite o CPF" maxlength="15"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label> Endereço: <span class="text-danger">*</span></label><br>
                                    <input type="text" name="client_adddress" class="form-control" required placeholder="Digite o endereço" maxlength="50"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label> Telefone: <span class="text-danger">*</span></label><br>
                                    <input type="text" name="client_phone" class="form-control" required placeholder="(XX) XXXXX-XXXX" maxlength="20"><br>
                                </div>
                                <div class="col-md-4">
                                    <label> Tipo Plano: <span class="text-danger">*</span></label><br>
                                    <select name="client_type" id="" class="form-select">
                                        <option value="bronze">Bronze</option>
                                        <option value="prata">Prata</option>
                                        <option value="ouro">Ouro</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-4">
                            <div class="row border rounded">
                                <h5 class="text-center text-primary">Acesso</h5>
                                <hr>
                                <div class="col-md-12">
                                    <label> E-mail: <span class="text-danger">*</span></label><br>
                                    <input type="email" name="client_email" class="form-control" required placeholder="Digite o e-mail" maxlength="50"><br>
                                </div>

                                <div class="col-md-12">
                                    <label> Senha: <span class="text-danger">*</span></label><br>
                                    <input type="password" name="client_password" class="form-control" required placeholder="Digite o e-mail" maxlength="50"><br>
                                </div>   
                            </div>   
                        </div>						  							  							    	
				    	<div class="col-md-12">
				    		<button type="submit" class="btn btn-success"> Enviar Dados </button>
				    	</div>
		  			</div>	

				  </div>
				</div>
			</form>
	  	</div>	  	
	  </div>
	</div>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>