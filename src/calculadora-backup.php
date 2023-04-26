<?php 
$soma = $_GET['soma'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    

    <div id="caixa">
        <form action="calc.php" method="get">
        <input type="number" name="n1">
        <input type="number" name="n2">
    <button>Soma</button>
    </form>
    <h3>
        <?php  echo $soma;?>
    </h3>
</div>





</body>
</html>