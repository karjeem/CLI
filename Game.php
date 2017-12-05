<?php

  if (!isset($argv)) {
    header('Location: ./index.php');
    exit();
  }

  include 'CLI.php';

  $input = new CLI();

  $input->sayLine("Nonnii");
  $input->sayLine("Mikä on nimi?");
  $line = $input->getLine("Mun nimi on");

?>
