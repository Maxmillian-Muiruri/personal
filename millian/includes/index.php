<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>learning php</title>
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <input type="number" name="num1" placeholder="Number one" required>

    <select name="operator">

      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>

    <input type="number" name="num2" placeholder="Number two" required>
    <button>Calculator</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "post") {

    $num01 = filter_input(
      INPUT_POST,
      "num01",
      FILTER_SANITIZE_NUMBER_FLOAT
    );

    $num02 = filter_input(
      INPUT_POST,
      "num02",
      FILTER_SANITIZE_NUMBER_FLOAT
    );

    $operator = htmlspecialchars($_post["operators"]);
  }
  // Error handlers

  $errors = false;

  if (empty($num01) || empty($num02) || empty($operator)) {
    echo "<p class='calc-error'>fill in all fields</p>";
    $errors = true;

    if (!is_numeric($num01) || !is_numeric($num02)) {
      echo "<p class='calc-error'>only write numbers</p>";
      $errors = true;
    }

    // calculate the numbers if no errors
    if (!$errors) {
      $value = 0;

      switch ($operator) {
        case "add":
          $value = $num01 + $num02;
          break;
        case "subtract":
          $value = $num01 - $num02;
          break;

        case "multiply":
          $value = $num01 * $num02;
          break;

        case "divide":
          $value = $num01 / $num02;
          break;

        default:
          echo "<p class='calc-error'>something went HORRIBLY wrong!</p>";
      }
      echo "<p class = 'calc-result'>Result =" . $value . "</p>";
    }
  }
  ?>



</body>

</html>