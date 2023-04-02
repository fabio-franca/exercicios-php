<?php 
	
	require_once 'connect.php';
	require_once 'functions.php';

	if(isset($_GET['id'])){
		$filter['id_supplier'] = $_GET['id'];
		$supplier = select("suppliers", null, $filter, " LIMIT 1")[0];
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
				    <h4 class="text-secondary">Cadastro de Fornecedor</h4>
				  </div>
				  <div class="card-body">
				    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-7">
                                    <label> Descrição: <span class="text-danger">*</span></label><br>
                                    <input type="text" name="supplier_description" class="form-control" value="<?=$supplier['supplier_description'];?>"
                                        required placeholder="Digite a descrição" maxlength="50"><br>
                                </div>
                                <div class="col-md-5">
                                    <label> CNPJ: <span class="text-danger">*</span></label><br>
                                    <input type="text" name="supplier_cnpj" class="form-control" value="<?=$supplier['supplier_cnpj'];?>"
                                        required placeholder="Digite o CNPJ" maxlength="20"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label> Endereço: <span class="text-danger">*</span></label><br>
                                    <input type="text" name="supplier_address" class="form-control" value="<?=$supplier['supplier_address'];?>"
                                        required placeholder="Digite o endereço" maxlength="50"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label> Telefone: <span class="text-danger">*</span></label><br>
                                    <input type="text" name="supplier_phone" class="form-control" value="<?=$supplier['supplier_phone'];?>" 
                                        required placeholder="(XX) XXXXX-XXXX" maxlength="20"><br>
                                </div>
                                <div class="col-md-6">
                                    <label> E-mail: <span class="text-danger">*</span></label><br>
                                    <input type="email" name="supplier_email" class="form-control" value="<?=$supplier['supplier_email'];?>"
                                        required placeholder="Digite o e-mail" maxlength="50"><br>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id_supplier" value="<?=$supplier['id_supplier'];?>">					  							  							    	
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