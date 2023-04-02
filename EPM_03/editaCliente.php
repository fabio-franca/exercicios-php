<?php 
	
	require_once 'connect.php';
	require_once 'functions.php';

	if(isset($_GET['id'])){
		$filter['id_client'] = $_GET['id'];
		$client = select("clients", null, $filter, " LIMIT 1")[0];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Formulario de Edição </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	
	<?php include_once 'components/menu.php'; ?>

	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-8 offset-2">
	  		<form action="editar.php" method="POST">
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
                                    <input type="text" name="client_name" class="form-control" value="<?=$client['client_name'];?>"
                                        required placeholder="Digite o nome" maxlength="50"><br>
                                </div>
                                <div class="col-md-5">
                                    <label> CPF: <span class="text-danger">*</span></label><br>
                                    <input type="text" name="client_cpf" class="form-control" value="<?=$client['client_cpf'];?>"
                                        required placeholder="Digite o CPF" maxlength="15"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label> Endereço: <span class="text-danger">*</span></label><br>
                                    <input type="text" name="client_adddress" class="form-control" value="<?=$client['client_adddress'];?>"
                                        required placeholder="Digite o endereço" maxlength="50"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label> Telefone: <span class="text-danger">*</span></label><br>
                                    <input type="text" name="client_phone" class="form-control" value="<?=$client['client_phone'];?>" 
                                        required placeholder="(XX) XXXXX-XXXX" maxlength="20"><br>
                                </div>
                                <div class="col-md-4">
                                    <label> Tipo Plano: <span class="text-danger">*</span></label><br>
                                    <select name="client_type" id="" class="form-select" value="<?=$client['client_type'];?>">
                                        <?php $tipos = array('BRONZE', 'PRATA', 'OURO'); 
                                            foreach($tipos as $tipo): ?>
                                            <?php if($tipo == $client['client_type']) { ?> 
                                                <option selected value="<?=$tipo;?>"><?=$tipo;?></option>
                                                <?php } else { ?>
                                                    <option value="<?=$tipo;?>"><?=$tipo;?></option>  
                                                <?php } ?>
                                           <?php endforeach; ?>
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
                                    <input type="email" name="client_email" class="form-control" value="<?=$client['client_email'];?>"
                                        required placeholder="Digite o e-mail" maxlength="50"><br>
                                </div>

                                <div class="col-md-12">
                                    <label> Senha: <span class="text-danger">*</span></label><br>
                                    <input type="password" name="client_password" class="form-control" value="<?=$client['client_password'];?>"
                                        required placeholder="Digite o e-mail" maxlength="50"><br>
                                </div>   
                            </div>   
                        </div>	
                        <input type="hidden" name="id_client" value="<?=$client['id_client'];?>">					  							  							    	
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