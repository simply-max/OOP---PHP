<?php
require_once "Mittelwert.interface.php";

class MittelwertAdapter implements Mittelwert {
  public function showHarmonischesMittel()  : void {}
  public function showGeometrischesMittel() : void {}
  public function showArritmetischesMittel(): void {}
  public function showQuadratischesMittel() : void {}
}