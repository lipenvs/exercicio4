<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EXERCÍCIO 4 - DESAFIO DEV - FATORIAL</title>
</head>

<body>
  <h1>
    <?php
    function calcFactorial($number)
    {
      if ($number < 0) {
        return "Não é possível calcular fatorial de um número negativo.";
      } elseif ($number == 0) {
        return 1;
      } else {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
          $factorial *= $i;
        }
        return $factorial;
      }
    }

    // Coloque aqui um valor númerico (Input)
    $input = 5;

    $result = calcFactorial($number);
    echo "Output: " . $result;

    ?>
  </h1>
</body>

</html>