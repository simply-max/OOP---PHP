<?php
require_once "Mittelwert.adapter.php";

class Messgenauigkeit extends MittelwertAdapter {
  // Messwerte als private Eigenschaft deklarieren
  private array $messwerte = [10, 12, 14, 20];

  public function showQuadratischesMittel(): void {
    $quadratSumme = 0;

    // Sicherstellen, dass das Array nicht leer ist
    if (!empty($this->messwerte)) {
      foreach ($this->messwerte as $messwert) {
          $quadratSumme += $messwert ** 2;
      }

      $amw = sqrt($quadratSumme / count($this->messwerte));
      echo "<p>Quadratisches Mittel: $amw</p>";
    } else {
      echo "<p>Keine Messwerte vorhanden.</p>";
    }
  }
}
