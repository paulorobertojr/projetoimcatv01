<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CÁLCULO IMC</title>    
</head>

<body>
 <h1>Calcule seu IMC!</h1>

 <?php 

$peso = 65;
$altura = 1.63;

$imc = $peso / $altura ** 2;

 $calculadora = [
    "18.5" => "Abaixo do peso",
    "24.9" => "Peso normal",
    "29.9" => "Acima do peso",
    "34.9" => "Obesidade leve",
    "39.9" => "Obesidade moderada",
    "40.0" => "Obesidade mórbida"
];
foreach($calculadora as $key => $value){
   
    if((float) $key < 40.0){ //Se a chave for menor que 40, fica apto a testar todos os valores do IMC. 
        if($imc <= (float) $key){
            echo PHP_EOL."$value";
            break;
        }
    }else{ //Se o IMC for maior ou igual a 40, equivale a última opção do teste "Obesidade grau III"
        echo PHP_EOL."$value";
    }
}
 ?>

</body>
</html>