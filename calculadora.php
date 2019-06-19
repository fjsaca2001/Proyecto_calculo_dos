<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculadora</title>
  </head>
  <body>
    <h1>Calculadora de funciones f(x) = x^3 + 2x^2 - 5x + 5</h1>
    <form method="post" action= "calculadora.php">
      Ingrese un limite
      <input type="text" name="n_user">
      <select name = "opciones">
        <option value="0">derivada de una funcion</option>
        <option value="1">Valores</option>
      <input type="submit" name="calcular" value="calcular">
  </body>
</html>
<?php
include("clase.php");
  if(isset($_REQUEST['calcular'])){
    $op = $_REQUEST['opciones'];
    switch ($op) {
      case 0:
        echo "La derivada de x^3 + 2x^2 - 5x + 5 es: 3x^2 + 4x - 5";
        break;
      case 1:
        $n = $_REQUEST['n_user'];
        if ($n == 0){
          $n = 5;
        }
        $b1 = $n / 2;
        $b1 = (int) $b1;
        $b = $b1 * -1;
        echo "\nX || Y\n";
        for ($i = $b; $i <= $b1 ; $i++){
           $y = matematica::valores($i);
           echo "$y || $i\n";
          }
        break;
    }
}
?>
