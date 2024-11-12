<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculador de IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12-md">Calculadora IMC</div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="get" action="">
                    <input type="number" class="form-control" required name="altura" placeholder="Digite sua altura">
                    <input type="number" class="form-control" required name="peso" placeholder="Digite seu peso">
                    <button type="submit" class="btn  btn-primary btn-lg">Calcular</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php

if(!empty($_GET)){ 

$altura = $_GET['altura']/100;
$peso = $_GET['peso'];

$imc = round(($peso/($altura*$altura)),2);

if($imc<18.5){
    $categoria = "Abaixo do peso";
}else if($imc>=18.5 and $imc<24.9){
    $categoria = "Peso  normal";
}else if($imc>=25 and $imc<29.9){
    $categoria = "Sobrepeso";
}else{
    $categoria = "Obesidade";
}

echo "<script>alert('Seu imc é: $imc e sua categoria é $categoria');</script>";

}

?>