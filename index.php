<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<main>
  <div class="calculator-wrapper">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <input type="number" name="num01" placeholder="First number" required>
      <select name="operator" id="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
      </select>
      <input type="number" name="num02" placeholder="Second number" required>
      <button type="submit" name="submit" value="submit">Calculate</button>
    </form>

    <!-- Result/Error Display -->
    <div class="result">
      <?php
      // Grab the form data
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $num01 = filter_input(INPUT_POST, 'num01', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
          $num02 = filter_input(INPUT_POST, 'num02', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
          $operator = htmlspecialchars($_POST['operator']);

          // Error handling
          $error = false;

          if (empty($num01) || empty($num02) || empty($operator)) {
              echo "<p class='error-text'>Please fill all fields!</p>";
              $error = true;
          } elseif (!is_numeric($num01) || !is_numeric($num02)) {
              echo "<p class='error-text'>Please enter valid numbers!</p>";
              $error = true;
          } elseif ($operator === 'divide' && $num02 == 0) {
              echo "<p class='error-text'>Cannot divide by zero!</p>";
              $error = true;
          }

          // Calculate the result
          if (!$error) {
            $value = 0;
              switch ($operator) {
                  case 'add':
                      $value = $num01 + $num02;
                      break;
                  case 'subtract':
                      $value = $num01 - $num02;
                      break;
                  case 'multiply':
                      $value = $num01 * $num02;
                      break;
                  case 'divide':
                      $value = $num01 / $num02;
                      break;
                  default:
                      echo "<p class='error-text'>Something went wrong!</p>";
              }
              if (isset($value)) {
                  echo "<p class='result-text'>The result is: $value</p>";
              }
          }
      }
      ?>
    </div>
  </div>
</main>
</body>
</html>
