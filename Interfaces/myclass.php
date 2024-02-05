<?php
require_once "myClassAdapter.php";
class MyClass extends MyClassAdapter {
  public function functionA(): string {
    return "<p>Ich bin Funktion A</p>";
  }
}