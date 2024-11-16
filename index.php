<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<!-- <?php 
// Scalar Data Types
$string = "Mehedi Billah";
$number = 10;
$integer = 10;
$float = 10.5;
$boolean = true;

// Compound Data Types
$array = array("HTML", "CSS", "JavaScript");
$array2 = ["HTML", "CSS", "JavaScript"];
$object = new stdClass();

// Special Data Types
$null = null;

// Default Data Types
$name = "";
$age = 0;
$float = 0.0;
$boolean = false;
$array = [];
$object= null;

echo $string;
?>

<p>Hi! my name is <?php echo $string ?>, and I'm learning PHP. </p> -->

<!-- <?php 
// Super Global Variables
echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["SERVER_ADDR"];
echo "<br>";
echo $_SERVER["SERVER_PORT"];
echo "<br>";
echo $_SERVER["PHP_SELF"];
echo "<br>";
echo $_SERVER["REQUEST_METHOD"];
echo "<br>";
$_GET[""];
$_POST[""];
$_REQUEST[""];
$_FILES[""];
$_COOKIE[""];
$_SESSION[""];
$_ENV[""];
$_SERVER[""];

?> -->

<!-- <?php 
// Get Method _http://localhost/myWebSite/index.php?nameGet=Mehedi&age=30
echo $_GET["nameGet"];
echo $_GET["age"];
?> -->
<main>
  <form action="index.php" method="post">
<label for="firstName">firstName</label>
<input type="text" name="firstName" id="firstName">
<label for="lastName">lastName</label>
<input type="text" name="lastName" id="lastName">
<label for="favouritepet">favourite Pet?</label>
<select name="favouritepet" id="favouritepet">
  <option value="none">None</option>
  <option value="cat">Cat</option>
  <option value="dog">Dog</option>
  <option value="bird">Bird</option>
  <option value="fish">Fish</option>
</select>
    <button type="submit">Submit</button>
  </form>
</main>
</body>
</html>