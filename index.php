<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/main.css">
</head>
<body>


<main>
  <?php 
  // String operators
$a = 'Hello';
$b = 'World';
$c = $a . ' ' . $b;
echo $c;
echo '<br>';

// Arithmetic operators
$x = 10;
$y = 3;
$z = $x + $y;
$math = ($x + $y) * $y;
echo $z;
echo '<br>';
echo $math;
echo '<br>';
// remainder
echo $x % $y;
echo '<br>';

// Assignment operators
$d = 5;
$d += 10;
// expected output: d= 15
$d -= 5;
// expected output: d= 10
echo $d;

// Comparison operators
$e = 10;
$f = 20;
$g = $e == $f;
// expected output: false
$h = $e != $f;
// expected output: true

// Logical operators
$i = true;
$j = false;
$k = $i && $j;
// expected output: false
$l = $i || $j;
// expected output: true

// Increment/Decrement operators
$m = 5;
$m++;
// expected output: 6
$n = 5;
$n--;
// expected output: 4

// Conditional operators
$o = 20;
$p = 20;
$q = ($o > $p) ? 'greater' : 'lesser';
// expected output: lesser
echo "<br>";
if ($o > $p) {
  echo 'greater';
} else {
  echo 'lesser';
}
echo "<br>";

$aa = 2;
$bb = "2";
// compare values by type value
if($aa === $bb) {
  echo 'They are equal';
}else {
  echo 'The are not equal';
}


// Null coalescing operator
$r = null;
$s = $r ?? 'default';
// expected output: default

// Spaceship operator
$t = 10;
$u = 20;
$v = $t <=> $u;
// expected output: -1
?>

</main>
</body>
</html>