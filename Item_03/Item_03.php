<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Parcelas</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
   <div class="container p-4">
        <h3 class="text-center text-primary">Gerador de Parcelas</h3>
        <hr>
        <form action="#" method="POST">
            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <label for="control-label">Valor</label>
                    <input type="number" min="1" max="9999" step=".01" name="valor" class="form-control" placeholder="Digite o valor desejado" required>
                </div>
                <div class="col-md-3">
                    <label for="control-label">Parcelas</label>
                    <input type="number" name="parcelas" class="form-control" id="parcelas" 
                        placeholder="Informe a quantidade" required min="1"> 
               </div>
            </div>
            <div class="row mt-4 justify-content-md-center">
                <div class="col-md-6 text-center">
                        <button type="submit" class="btn btn-primary w-100" id="botao_gerar">Gerar</button>
                </div>
            </div>
        </form>
   </div> 

   <?php 	
		if(isset($_POST['parcelas'])){

            $valor = $_POST['valor'];
            $valor = number_format($valor,2,",",".");
            $parcelas = $_POST['parcelas'];
            $mes_extenso = '';
            $ano_atual = 2023;
            $mes_inicial = 1;
	?>	
			<div class="container-fluid col-md-10 offset-md-1 mt-4">
				<table class="table table-hover table-bordered table-striped">
                    <th class="text-center"> Data Vencimento </th>
                    <th class="text-center"> Número da Parcela </th>
                    <th class="text-center"> Valor Parcela </th>
					<?php for($mes=1;$mes<=$parcelas;$mes++){ ?>
                      <?php  if ($mes_inicial > 12){ ?>  
                        <?php    $mes_inicial = 1; ?> 
                        <?php   ++$ano_atual; ?> 
                       
                            <tr class="text-center">
                                <td><?=$mes_inicial.'/'.$ano_atual?></td>
                                <td><?=$mes.'/'.$parcelas?></td>
                                <td><?='R$ '.$valor?></td>
                            </tr>
                        <?php ++$mes_inicial; ?>
                        <?php } else{  ?>
                            <tr class="text-center">
                                    <td><?=$mes_inicial.'/'.$ano_atual?></td>
                                    <td><?=$mes.'/'.$parcelas?></td>
                                    <td><?='R$ '.$valor?></td>
                            </tr>
                            <?php $mes_inicial++ ?>
				    <?php } 
                }?>
				</table>
			</div>

	<?php } else { ?>		
		<div class="col-md-6 offset-md-3">
			<hr>
			<div class="alert alert-warning" role="alert">
			  Insira o valor e quantidade de parcelas
			</div>
		</div>
	<?php } ?>	

	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	
	<!-- Bootstrap -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	
	<!-- Icones -->
	<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>    
    
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

    <!-- Custom Script -->
	<script type="text/javascript">
		$(document).ready(function () {
		    $('#myTable').DataTable({
		    	"language": {
			        "sProcessing":    "Procesando...",
			        "sLengthMenu":    "Mostrar _MENU_ registros",
			        "sZeroRecords":   "Não se encontram resultados",
			        "sEmptyTable":    "Ningún dato disponible en esta tabla",
			        "sInfo":          "Mostrando registros de _START_ a _END_ de um total de _TOTAL_ registros",
			        "sInfoEmpty":     "Mostrando registros de 0 al 0 de un total de 0 registros",
			        "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
			        "sInfoPostFix":   "",
			        "sSearch":        "Buscar:",
			        "sUrl":           "",
			        "sInfoThousands":  ",",
			        "sLoadingRecords": "Carregando...",
			        "oPaginate": {
			            "sFirst":    "Primero",
			            "sLast":    "Último",
			            "sNext":    "Seguinte",
			            "sPrevious": "Anterior"
			        },
			        "oAria": {
			            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
			        }
			    }
		    });
		});
	</script>
</body>
</html>