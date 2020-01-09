<!-- Write a fx that title cases a given string -->

<?php

  function titleCase($str) {
    return ucwords(strtolower($str));
  }

  echo titleCase('tHe boy WHO ruLED The worLd');
?>