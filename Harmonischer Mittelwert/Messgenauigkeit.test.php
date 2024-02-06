<!-- Grundlegendes HTML Gerüst -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- PHP Code Block -->
  <?php
    ini_set("display_errros", "on");            // Fehlermeldungen anschalten

    require_once "Messgenauigkeit.class.php";

    $obj = new Messgenauigkeit();
    echo $obj->showQuadratischesMittel();
  ?>
</body>
</html>