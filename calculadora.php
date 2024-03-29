<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculadora</title>
    <link rel="icon" type="image/png" href="img/calculadora.jpg">
    <link rel="stylesheet" href="estilos.css" type="text/css">
  </head>
  <body>
    <h1>Calculadora de funciones f(x) = x^3 + 2x^2 - 5x + 5</h1>
    <form method="post" action= "calculadora.php">
      <h4>Ingrese el limite inferior
      <input type="text" name="n_inferior">
      Ingrese el limite superior
      <input type="text" name="n_superior">
      <input type="submit" name="calcularValores" value="Calcular Valores"></h4>
      <h1>Calculadora de la derivada de una Funcion</h1>
      <h3>Ingrese los valores segun corresponde<br>
      <input type="text" size="1" name="b5"> x^ <input type="text" size="1" name="e5"> +
      <input type="text" size="1" name="b4"> x^ <input type="text" size="1" name="e4"> +
      <input type="text" size="1" name="b3"> x^ <input type="text" size="1" name="e3"> +
      <input type="text" size="1" name="b2"> x^ <input type="text" size="1" name="e2"> +
      <input type="text" size="1" name="b1"> x^ <input type="text" size="1" name="e1"> +
      <input type="text" size="1" name="b0"> x <br><br>
      <input type="submit" name="calcularDevivada" value=" Calcular La Derivada "></h3>
  </form>
  </body>
</html>
<?php
include("clase.php");
  if(isset($_REQUEST['calcularValores'])){
    $n_inferior = $_REQUEST['n_inferior'];
    $n_superior = $_REQUEST['n_superior'];
    if ($n_inferior == 0){
      $n_inferior = -5;
    }
    if ($n_superior == 0) {
      $n_superior = 5;
    }
    echo "<table border = 5>";
    echo "<tr><td><center><p>X</p></center></td><td><center><p>Y</p></center></td>";
    for ($i = $n_inferior; $i <= $n_superior ; $i++){
      echo "<tr><td><h4>x = $i</td>";
      for ($j = 0   ; $j < 1; $j++){
           $y = matematica::valores($i);
           echo "<td><h4>($i)^3 + 2($i)^2 - 5($i) + 5 = $y</td>";
      }
          echo "<tr>";
    }
    echo "</tr>";
    echo "</table>";
  }
  echo "<font face='Arial' size='5' color= white aling= center>";
  if (isset($_REQUEST['calcularDevivada'])){
    $b5 = $_REQUEST['b5'];
    $e5 = $_REQUEST['e5'];
    $b4 = $_REQUEST['b4'];
    $e4 = $_REQUEST['e4'];
    $b3 = $_REQUEST['b3'];
    $e3 = $_REQUEST['e3'];
    $b2 = $_REQUEST['b2'];
    $e2 = $_REQUEST['e2'];
    $b1 = $_REQUEST['b1'];
    $e1 = $_REQUEST['e1'];
    $b0 = $_REQUEST['b0'];
    $cad = "x^";
    echo "La Funcion Principal es: $b5$cad$e5 + $b4$cad$e4 + $b3$cad$e3 + $b2$cad$e2 + $b1$cad$e1 + $b0<br>";
    $cad = "x^";
    echo "Primer paso: <br><br>";
    echo "Multiplicacion del exponente * base y exponente - 1<br><br>";
    echo "($e5 * $b5$cad$e5 - 1) + ($e4 * $b4$cad$e4 - 1) + ($e3 * $b3$cad$e3 - 1) + ($e2 * $b2$cad$e2 - 1) + ($e1 * $b1$cad$e1 - 1) + (0 * $b0$cad 0- 1)<br><br>";
    $b5 *= $e5;
    $e5 -= 1;
    $b4 *= $e4;
    $e4 -= 1;
    $b3 *= $e3;
    $e3 -= 1;
    $b2 *= $e2;
    $e2 -= 1;
    $b1 *= $e1;
    $e1 -= 1;
    $b0 *= 0;
    echo "Segundo paso: <br>";
    echo "Resultados<br><br>";
    echo "($b5$cad$e5) + ($b4$cad$e4) + ($b3$cad$e3) + ($b2$cad$e2) + ($b1$cad$e1) + ($b0$cad 0)<br>";
    $resultado = "Resultado: <br> La derivada de la funcion es:";
    if($e5 == 0 || $b5 == 0){
      $cad = "";
      $e5 = (string) $e5;
      $e5 = "";
    }
    if($e5 == 1){
      $cad = "x";
      $e5 = (string) $e5;
      $e5 = "";
    }
    $resultado .= " $b5$cad$e5";
    $cad = "x^";


    if($e4 == 0 || $b4 == 0){
      $cad = "";
      $e4 = (string) $e4;
      $e4 = "";
    }
    if($e4 ==1){
      $cad = "x";
      $e4 = (string) $e4;
      $e4 = "";
    }
    $resultado .= " + $b4$cad$e4";
    $cad = "x^";


    if($e3 == 0 || $b3 == 0){
      $cad = "";
      $e3 = (string) $e3;
      $e3 = "";
    }
    if($e3 == 1){
      $cad = "x";
      $e3 = (string) $e3;
      $e3 = "";
    }
    $resultado .= " + $b3$cad$e3";
    $cad = "x^";


    if($e2 == 0 || $b2 == 0){
      $cad = "";
      $e2 = (string) $e2;
      $e2 = "";
    }
    if($e2 == 1){
      $cad = "x";
      $e2 = (string) $e2;
      $e2 = "";
    }
    $resultado .= " + $b2$cad$e2";
    $cad = "x^";


    if($e1 == 0 || $b1 == 0){
      $cad = "";
      $e1 = (string) $e1;
      $e1 = "";
    }
    if($e1 == 1){
      $cad = "";
      $e1 = (string) $e1;
      $e1 = "";
    }
    $resultado .= " + $b1$cad$e1";
    $cad = "x^";
    if ($b0 == 0) {
      $cad = "";
      $b0 = (string) $b0;
      $b0 = "";
    }
    $resultado .= " $b0$cad";
    $cad = "x^";
    echo "<br>  $resultado </font>";
  }
?>
