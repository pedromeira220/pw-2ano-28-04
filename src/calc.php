<?php 

//CAPTURAR VALOR DO FORMAS

$firstNumber = (float) $_GET['first_number'];
$secondNumber = (float) $_GET['second_number'];
$operation = $_GET['operation'];


// função de realizar uma soma 
// $resultado = $firstNumber + $secondNumber;

if($operation == "addition") {
  $resultado = $firstNumber + $secondNumber;
} else if($operation == "subtraction") {
  $resultado = $firstNumber - $secondNumber;
} else if($operation == "multiplication") {
  $resultado = $firstNumber * $secondNumber;
} else if($operation == "division") {
  $resultado = $firstNumber / $secondNumber;
}

header("Location: http://localhost/calculadora.php?resultado=$resultado");
// echo "A soma eh: ".$soma;



?>