<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem quer ser um milionário</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center p-4">Gerador de Dezenas da Mega-Sena</h1>
        <form action="#" method="POST">
            <div class="row justify-content-md-center">
                <button type="submit" class="btn btn-success" name="botao">Clique aqui para gerar!</button>
            </div>
        </form>

<?php
    $primeira_dezena = rand(1,99);
    $segunda_dezena = rand(1, 99);
    $terceira_dezena = rand(1, 99);
    $quarta_dezena = rand(1, 99);
    $quinta_dezena = rand(1, 99);
    $sexta_dezena = rand(1, 99);

    $dezenas = array($primeira_dezena);

    while(in_array($segunda_dezena, $dezenas)) {
        $segunda_dezena = rand(1,99);
    } 

    $dezenas = array($primeira_dezena, $segunda_dezena);

    while(in_array($terceira_dezena, $dezenas)) {
        $terceira_dezena = rand(1,99);
    } 

    $dezenas = array($primeira_dezena, $segunda_dezena, $terceira_dezena);

    while(in_array($quarta_dezena, $dezenas)) {
        $quarta_dezena = rand(1,99);
    } 

    $dezenas = array($primeira_dezena, $segunda_dezena, $terceira_dezena, $quarta_dezena);
    
    while(in_array($quinta_dezena, $dezenas)) {
        $quinta_dezena = rand(1,99);
    } 

    $dezenas = array($primeira_dezena, $segunda_dezena, $terceira_dezena, $quarta_dezena, $quinta_dezena);

    while(in_array($sexta_dezena, $dezenas)) {
        $sexta_dezena = rand(1,99);
    } 

    $dezenas = array($primeira_dezena, $segunda_dezena, $terceira_dezena, $quarta_dezena, $quinta_dezena, $sexta_dezena);

    $resultado = "";

    if(isset($_POST["botao"])){
?>  
        <div class="row mt-3">
            <?php     foreach($dezenas as $dados) { 
                $resultado = "$dados ";
            ?>
             <h4 class="text-center text-success"><?=$resultado?></h4>
             <?php }; ?>
        </div>
    </div>

<?php } ?>

</body>
</html>

