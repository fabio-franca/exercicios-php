<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora TOP do PHP</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <div class="container p-3">
        <div class="row">
            <h3 class="text-center text-primary">Calculadora TOP do PHP</h3>
            <hr>
        </div>
        <div class="d-flex justify-content-center ">
        <form action="./calculadora.php" method="POST" class="">
            <div class="row mb-3">
                <div class="col-md-6 text-center">
                    <input type="text" class="form-control" name="valor1" id="valor1" placeholder="Digite o primeiro valor"/>
                </div>
                <div class="col-md-6 text-center">
                    <input type="text" class="form-control" name="valor2" id="valor2" placeholder="Digite o segundo valor"/>
                </div>
            </div>

            <div class="row mb-3 justify-content-md-center">
                <p class="text-center">Escolha uma das funções</p>
                <div class="col-md-6">
                    <select name="funcao" class="form-select" id="tipo">
                        <option value="+"> + Soma</option>
                        <option value="-"> - Subtração</option>
                        <option value="*"> * Multiplicação</option>
                        <option value="/"> / Divisão</option>
                        <option value="**"> ** Potenciação</option>
                        <option value="sqrt">Raiz Quadrada</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success w-100">Calcular</button>
            </div>
        </form>
        </div>
    </div>
<?php
    if(isset($_GET['msg'])) {
        $resultado = $_GET['msg'];
?>
    <div class="row mt-4 justify-content-md-center">
        <div class="col-md-3 d-flex">
            <h4 class="text-center me-3">Resultado:</h4>
            <input type="text" name="resultado" class="form-control w-50" value="<?=$resultado?>">
        </div>  
    </div>    
<?php } ?>

<script type="text/javascript">
        $(document).ready(function(){
            $('#tipo').change(function(){
                var tipo = $("#tipo option:selected").text();
                
                if (tipo == 'Raiz Quadrada') {

                     $('#valor2').attr("disabled", true);
                     $('#valor2').val('');
                     $('#valor2').attr("placeholder", '');
                } else {
                     $('#valor2').attr("disabled", false);
                     $('#valor2').val('');
                     $('#valor2').attr("placeholder", "Digite o segundo valor"); 
                }
            });
        });
</script>
</body>
</html>


