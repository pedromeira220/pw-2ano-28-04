<?php 
  if(isset($_GET['resultado'])) {
    $resultado = $_GET['resultado'];
  }
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./css/calculadora.css">
  <title>Calculadora</title>
</head>
<body>
  <div id="form-container">

    <h2 class="title">
      <?php 

        echo "O resultado é: " . $resultado;
      ?>
    </h2>

    <form action="calc.php" method="get" id="form-content">    
      <div>
        <label for="first_number">Digite o primeiro número</label>
        <input type="text" name="first_number" id="first_number" class="input" placeholder="Ex: 4">
      </div>

      <div>
        <label for="second_number">Digite o segundo número</label>
        <input type="text" name="second_number" id="second_number" class="input" placeholder="Ex: 8">
      </div>

      <div>
        <label for="operation">Selecione a operação</label>
        <div class="select-container">
          
          <select name="operation" id="operation">
            <option value="addition">Adição</option>
            <option value="subtraction">Subtração</option>
            <option value="multiplication">Multiplicação</option>
            <option value="division">Divisão</option>
  
          </select>
        </div>

      </div>


      <button type="submit" id="calculate-button">Calcular</button>
    </form>
  </div>
</body>
</html>