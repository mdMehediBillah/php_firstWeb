<?php

// var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $firstName = htmlspecialchars( $_POST['firstName']);
  $lastName = htmlspecialchars( $_POST['lastName']);
  $favouritePet = htmlspecialchars( $_POST['favouritepet']);

  if (empty($firstName) || empty($lastName)) {
    header('Location: ../index.php?error=emptyfields');
    exit();
  }
  if ($_GET['error'] === 'invalidname') {
    echo '<p style="color: red;">Invalid name entered.</p>';
  }

  if ($favouritePet === 'none') {
    $favouritePet = 'no pet';
  }

  echo "Hello, $firstName $lastName! Your favourite pet is a $favouritePet!";

  // header('Location: ../index.php');
}
else {
  header('Location: ../index.php');
}