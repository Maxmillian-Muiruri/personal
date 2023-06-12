<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  // multi dimension arrays
  $food = [
    "fruits" => array(
      "apple", "mango", "banana",
      "cherry",
    ),
    "meat" => array("pork", "beef", "marton")

  ];


  echo $food["meat"][0];


  ?>

</body>

</html>