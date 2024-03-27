
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
