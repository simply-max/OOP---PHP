<?php
require_once "Mittelwert.adapter.php";

class Messgenauigkeit extends MittelwertAdapter {
  private array $messwerte = [10,12,14,20];

  public function showQuadratischesMittel(): void {
    $amw = 0;
    $mwesswqs = 0;
    foreach($this->messwerte as $messwert) {
      $mwesswqs += pow($messwert, 2);
    }
    $amw = sqrt($mwesswqs/count($this->messwerte));
    echo "<p>Quadratisches Mittel: $amw</p>";
  }
}