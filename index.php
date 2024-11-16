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
$bool = true;
$a = 1;
$b = 4;
$c = "1";

echo "<br>";
$result = match ($c) {
  1, 3, 5 => "The number is odd" ,
  2, 4, 6 => "The number is even" ,
  default => "The number is not 1, 2, 3, 4, 5, or 6",
};
echo $result;

echo "<br>";

// swith statement take a single value and it can compare it to multiple values or conditions
switch ($a){
  case $a > $b:
    echo 'a is greater than b';
    break;
  case $a < $b:
    echo 'a is less than b';
    break;
  case $a === $b:
    echo 'a is equal to b';
    break;
  default:
    echo 'a is not greater than, less than, or equal to b';
}

echo '<br>';
// if statement can compare multiple values or conditions
if ($a > $b && !$bool){
  echo 'The first condition is true';
} else if ($a < $b && !$bool || !$bool){
  echo 'The second condition is true';
} else {
  echo 'Both conditions are false';
}

?>

</main>
</body>
</html>