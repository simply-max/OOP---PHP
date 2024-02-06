<?php
require_once "myAdapter.php";             // Importiert den Adapter
class MyClass extends MyClassAdapter {    // Klasse "MyClass" wird um den Adapter "MyClassAdapter" erweitert
  public function functionA(): string {
    return "<p>Ich bin Funktion A</p>";
  }
  public function functionC(): float {
    return 5.5;
  }
}