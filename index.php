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
  <section class="form-wrapper" >
  <!-- <?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] === 'emptyfields') {
      echo '<p style="color: red; font-size: 1rem;">Please fill in all fields.</p>';
    }
  }
  ?> -->
    <form action="includes/formhandler.php" method="post">
    <div>
      <label for="firstName">firstName</label>
      <input type="text" name="firstName" id="firstName" placeholder="First name">
    </div>
    <div>
      <label for="lastName">lastName</label>
      <input type="text" name="lastName" id="lastName" placeholder="Last name">
    </div>
    <div>
      <label for="favouritepet">favourite Pet?</label>
      <select name="favouritepet" id="favouritepet">
      <option value="none">None</option>
      <option value="cat">Cat</option>
      <option value="dog">Dog</option>
      <option value="bird">Bird</option>
      <option value="fish">Fish</option>
      </select>
    </div>
      <button type="submit">Submit</button>
    </form>
  </section>
</main>
</body>
</html>