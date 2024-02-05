<?php
  /* Klasse "Computer" mit den Eigenschaften "CPU" und "RAM", 
     sowie der Funktion "starten", welche einen Text ausgibt. */
  class Computer {
    public $CPU = "Intel";
    public $RAM = "12 GB";
    public function starten() {
      echo "Computer gestartet!";
    }
  }
  $MeinPC = new Computer;     // Inizialisierung des Objekts "MeinPC", aus der Klasse "Computer".
  $MeinPC->CPU = "AMD";     // Änderung des Attributs "CPU", des Objekts "MeinPC", in den String "Hello".
  echo $MeinPC->CPU . "<br>"; // Ausgabe des Attributs "CPU", des Objekts "MeinPC".
  $MeinPC->starten();         // Aufruf der Funktion "starten", der Klasse "Computer". Die Funktion wurde an "MeinPC" vererbt.
