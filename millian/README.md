## // scalar types(contains one value)

```$string = "";
  $int = 0;
  $float = 0;
  $bool = false;

  $array = [];
  $object = null;
  $name = "maxmillin";
  $test = $name;
```

## super globals in php

````
php echo $_SERVER["DOCUMENT_ROOT"];

echo "<br>";
echo $\_SERVER["PHP_SELF"];

echo "<br>";
echo $\_SERVER["SERVER_NAME"];

echo "<br>";
echo $\_SERVER["REQUEST_METHOD"];```
````

##

```php
 echo $_GET["name"];

  echo $_REQUEST["name"];

   echo $_REQUEST["name"];
    echo $_FILES["name"];

  $_COOKIE["name"];
  $_SESSION["userName"] = "maxmillian";
  echo $_SESSION["userName"];
  $_ENV[""];
```

## using a match:

```
$bool = true;

$a = "1";
  $b = 4;
  $result = match ($a) {
1, 2, 5 => "variable a is equal to one",
2 => "variable a is equal to two",

    default => "none were a match",

};
echo $result;
```

## arrays

```php
  $food = [
    "fruits" => array(
      "apple", "mango", "banana",
      "cherry",
    ),
    "meat" => array("pork", "beef", "marton")

  ];


  echo $food["meat"][0];
```
