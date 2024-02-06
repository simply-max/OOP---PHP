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
    ini_set("display_errros", "on");  // Fehlermeldungen anschalten
    require_once "myclass.php";       // Import myclass
    $obj = new MyClass();             // Objekt der Klasse "MyClass" wird deklariert
    echo $obj->functionA();           // Aufruf der Funktion "functionA" aus Objekt "obj"
  ?>
</body>
</html>