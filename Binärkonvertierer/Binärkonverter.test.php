<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    // Fehlermeldungen anschalten
    ini_set("display_errros", "on");

    require_once "Add2BinArrays.php";

    echo addBinaryArrays();

  ?>
</body>
</html>