<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    ini_set("display_errros", "on");
    require_once "myclass.php";
    $obj = new MyClass();
    echo $obj->functionA();
  ?>
</body>
</html>